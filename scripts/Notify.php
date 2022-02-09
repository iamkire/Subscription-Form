<?php
class Notify{
    public function NotifySubUsers($email)
    {
        $conn = new Connection();
        {
            if (isset($_POST['submit']) && !empty($_POST['email'])) {
                $query = "SELECT email,id from subform where email= :email";
                $stmt= $conn->Connect()->prepare($query);
                $stmt->bindParam(':email',$email);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    header("Location: views/welcome.view.php");
                    $emails = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return $emails;
                } else {
                    echo "User isn't subscribed ";
                }
            } else {
                echo "Please fill out this field";
            }
        }
    }
}