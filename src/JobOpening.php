<?php
    class JobOpening
    {
        private $title;
        private $description;
        private $contact;

        function __construct($title, $description, $name, $email, $phone){
            $this->title = $title;
            $this->description = $description;
            $this->contact = new Contact($name, $email, $phone);
        }

        function setContact($name, $email, $phone) {
            $this->contact->setName($name);
            $this->contact->setEmail($email);
            $this->contact->setPhone($phone);
        }

        function getContactName() {
            return $this->contact->getName();
        }

        function getContactEmail() {
          return $this->contact->getEmail();
        }

        function getContactPhone() {
          return $this->contact->getPhone();
        }

        function setTitle($new_title) {
            $this->title = $new_title;
        }

        function setDescription($new_description){
            $this->description = $new_description;
        }

        function getTitle() {
            return $this->title;
        }

        function getDescription() {
            return $this->description;
        }

    }

?>
