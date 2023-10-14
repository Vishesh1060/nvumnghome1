<?php
    function writeAccData($NewAccData){
        global $mysqli;
        $InsStmt = "INSERT INTO accountdata (Uid, AccountNumber, MembershipStatus, Name, RelativeName, Relation, Aadhar, Pan, Dob, PhoneNumber, OtherPhoneNumber, Email, NomineeLink, IntroducerID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt->bind_param("iiisssssssssii", 
            $account->Uid, 
            $account->AccountNumber, 
            $account->MembershipStatus, 
            $account->Name, 
            $account->RelativeName, 
            $account->Relation, 
            $account->Aadhar, 
            $account->Pan, 
            $account->Dob->format("d-m-Y"), 
            $account->PhoneNumber, 
            $account->OtherPhoneNumber, 
            $account->Email->getAddress(), 
            $account->NomineeLink->getNomineeLink(), 
            $account->IntroducerID->getId()
        );
        $stmt = $mysqli->prepare($sql);

        if ($stmt->execute()==false){
            return "Error:".$stmt->error;
        }
        $stmt->close();

    } 


    function getAccData($Uid=null,$AccountNumber=null,$verbose=false){
        global $mysqli;
        if ($Uid!=null){
            $squery = $mysqli->prepare("SELECT * FROM accountdata WHERE Uid=?");
            $squery->bind_param("i", $uid);
            $squery->execute();
            $result=$squery->get_result();
        }elseif($AccountNumber!=null){
            $squery = $mysqli->prepare("SELECT * FROM accountdata WHERE AccountNumber=?");
            $squery->bind_param("i", $AccountNumber);
            $squery->execute();
            $result=$squery->get_result();
        }else{
            $squery = "SELECT * FROM accountdata";
            $result = mysqli_query($mysqli, $query); 
        }
        
        
        if (($result->num_rows)==1){
            $AccData=new AccountData($row["Uid"],$row["AccountNumber"],$row["MembershipStatus"],$row["Name"],$row["RelativeName"],$row["Relation"],$row["Aadhar"],$row["Pan"],$row["Dob"],$row["PhoneNumber"],$row["OtherPhoneNumber"],$row["Email"],$row["NomineeLink"],$row["IntroducerID"]);
            return $AccData;
        }
        elseif($result->num_rows>1){
            $AccData=[];
            array_push($AccData, new AccountData($row["Uid"],$row["AccountNumber"],$row["MembershipStatus"],$row["Name"],$row["RelativeName"],$row["Relation"],$row["Aadhar"],$row["Pan"],$row["Dob"],$row["PhoneNumber"],$row["OtherPhoneNumber"],$row["Email"],$row["NomineeLink"],$row["IntroducerID"]));
            return $AccData;
        } 
        else {
            echo "<p>"."<br>"."No results"."<br>"."<p>";
        }
    
    }

    function getAccTrxnData($TransactionId=null,$AccountNumber=null,$uid=null,$Date=null){
        if($TransactionId!=null and $Date!=null){
            $squery = $mysqli->prepare("SELECT * FROM accountransactiondata WHERE TransactionId=? and Date=?");
            $squery->bind_param("is", $TransactionId,$Date);
            $squery->execute();
            $result=$squery->get_result();
        }
    }

    //Object Relational Mapping Code: 
    class AccountData {
        public $Uid;
        public $AccountNumber;
        public $MembershipStatus;
        public $Name;
        public $RelativeName;
        public $Relation;
        public $Aadhar;
        public $Pan;
        public $Dob;
        public $PhoneNumber;
        public $OtherPhoneNumber;
        public $Email;
        public $NomineeLink;
        public $IntroducerID;
    
        function __construct($Uid, $AccountNumber, $MembershipStatus, $Name, $RelativeName, $Relation, $Aadhar, $Pan, $Dob, $PhoneNumber, $OtherPhoneNumber, $Email, $NomineeLink, $IntroducerID) {
            $this->Uid = $Uid;
            $this->AccountNumber = $AccountNumber;
            $this->MembershipStatus = $MembershipStatus;
            $this->Name = $Name;
            $this->RelativeName = $RelativeName;
            $this->Relation = $Relation;
            $this->Aadhar = $Aadhar;
            $this->Pan = $Pan;
            if ($Dob != null) {
                try {
                    $this->Dob = new DateTime($Dob);
                } catch (Exception $e) {
                    return 'Error: ' . htmlspecialchars($e->getMessage());
                }
                
                if ($this->Dob === false) {
                    return 'Error: Invalid date format';
                }
                
                if ($this->Dob > new DateTime()) {
                    return 'Error: Date of birth cannot be in the future';
                }
                
                if ($this->Dob < new DateTime('1900-01-01')) {
                    return 'Error: Date of birth cannot be before 1900-01-01';
                }
                
                if ($this->Dob > new DateTime('now -18 years')) {
                    return 'Error: Age must be at least 18 years old';
                }
                
                if ($this->Dob < new DateTime('now -120 years')) {
                    return 'Error: Age cannot be over 130 years old';
                }
                
                if ($this->Dob > new DateTime('now -18 years') || 
                    $this->Dob < new DateTime('now -120 years')) {
                    return 'Error: Invalid date of birth';
                }
                
                if ($this->Dob >= new DateTime('now -18 years') && 
                    $this->Dob <= new DateTime('now -13 years')) {
                    return 'Warning: User is a minor';
                }
                
                if ($this->Dob >= new DateTime('now -13 years')) {
                    return 'Error: User is too young';
                }
            $this->Dob = new DateTime($Dob);
            $this->PhoneNumber = $PhoneNumber;
            $this->OtherPhoneNumber = $OtherPhoneNumber;
            $this->Email = new EmailAddress($Email);
            $this->NomineeLink = new NomineeLink($NomineeLink);
            $this->IntroducerID = new IntroducerID($IntroducerID);
            }
        }
    }
    class AccountTransactionData {
        public $TransactionId;
        public $Date;
        public $Uid;
        public $AccountNumber;
        public $Amount;
        public $DebitorCredit;
        public $UTRno;
        public $PaymentSourceData;
        public $ApprovalId;
        public $Cancelled;
        public $Remarks;
    
        function __construct($TransactionId, $Date, $Uid, $AccountNumber, $Amount, $DebitorCredit, $UTRno, $PaymentSourceData, $ApprovalId, $Cancelled, $Remarks) {
            $this->TransactionId = $TransactionId;
            $this->Date = new DateTime($Date);
            $this->Uid = $Uid;
            $this->AccountNumber = $AccountNumber;
            $this->Amount = $Amount;
            $this->DebitorCredit = $DebitorCredit;
            $this->UTRno = $UTRno;
            $this->PaymentSourceData = $PaymentSourceData;
            $this->ApprovalId = $ApprovalId;
            $this->Cancelled = $Cancelled;
            $this->Remarks = $Remarks;
        }
    }


?>