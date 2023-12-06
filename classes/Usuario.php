<?php
include('database/conexao.php');

$db = new Conexao();

class Usuario{
    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function cadastrar ($nomeUsuario, $email, $senha)
    {
        // Verificar se a senha tem pelo menos 8 caracteres, incluindo números e caracteres especiais
        if (strlen($senha) < 8 || !preg_match('/[0-9]/', $senha) || !preg_match('/[^a-zA-Z0-9]/', $senha)) {
            print "<script> alert('A senha deve ter pelo menos 8 caracteres, incluindo números e caracteres especiais.')</script>";
            return false;
        }

        $emailExistente = $this->verificarEmailExistente($email);
        if ($emailExistente) {
            print "<script> alert('Email já cadastrado')</script>";
            return false;
        }

        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (usuario, email, senha) VALUES (?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $nomeUsuario);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $senhaCriptografada);
        $result = $stmt->execute();

        return $result;
    }

    public function logar($email, $senha){
        $sql = "SELECT * FROM user WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        if($stmt->rowCount() == 1){
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($senha, $usuario['senha'])){
                return true;
            }
        }

        return false; // Retorne false se não houver correspondência de e-mail ou senha
    }

    private function verificarEmailExistente($email)
    {
        $sql = "SELECT COUNT(*) as total FROM user WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'] > 0;
    }
}
?>
