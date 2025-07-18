<?php
class AdminCM extends DatabaseConfig
{
    protected function appendAdmin($fullName, $emailAddress, $password, $status)
    {
        $stashStmt = $this->integrate()->prepare('INSERT INTO `admins`(`fullname`, `email`, `password`, `status`) VALUES (?,?,?,?);');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if (!$stashStmt->execute([$fullName, $emailAddress, $hashedPassword,$status])) {
            header("Location: ./../../index.php?msg=error");
            exit;
        }

        $stashStmt = null;
    }
}
