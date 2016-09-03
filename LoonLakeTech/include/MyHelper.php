<?php
    /**
     * Return a formatted version of an array
     * $_POST, $_SESSION.
     */
    function DebugArray($data, $bool)
    {
        echo '<pre>' . var_export($data, $bool) . '</pre>';
    }

    /**
     * Prevent SQL injection
     * Trim Inputs
     * @param mixed $item
     */
    function Sanitize($item)
    {
        $output = $item;

        $output = $output . "123";

        $output = trim($output);

        return $output;
    }


    function ValidateInput($input)
    {
        if($input == "")
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    /**
     * Add a new line with before $text and a tab after.
     * @param mixed $message
     * @param mixed $text
     * @return string
     */
    function NewRow($message, $text)
    {
        return $message . "\n$text:\t";
    }

    function AddReason($message, $text)
    {
        return $message . "\n\tPlease Specify: <i>$text</i>\t";
    }


    function addYesNoAnswer($bool)
    {
        if($bool == "true")
        {
            $bool = true;
        }
        else if($bool == "false")
        {
            $bool = false;
        }
        else{
            return "Yes(   )  No(   )";
        }

        if($bool == true)
        {
            return "Yes( X ) No(   )";
        }
        else if ($bool == false){
            return "Yes(   )  No( X )";
        }
        else{
            return "Yes(   )  No(   )";
        }
    }

    function addQ10YesNo($bool, $tab = "")
    {
        $output = "";

        if($bool == "true")
        {
            $bool = true;
        }
        else if($bool == "false")
        {
            $bool = false;
        }
        else{
            return "$tab (   )     (   )";
        }

        if($bool == true)
        {
            return "$tab ( X )   (   )";
        }
        else if ($bool == false){
            return "$tab (   )  ( X )";
        }
        else{
            return "$tab (   )  (   )";
        }


    }

    /**
     * Create questions 1-10.
     * @param mixed $message
     * @param mixed $question
     * @param mixed $answer
     * @param mixed $reason
     * @param mixed $padding
     * @return string
     */
    function AddMedicalHistory_1($message, $question, $answer, $reason, $padding = "\t\t")
    {
        //Start the new row
        $message = NewRow($message, $question);
        //Add space between the question and the answer
        $message = $message . $padding;
        //Determine which answer to check off.
        if(!isset($_POST['seriousIllnessOperation']))
        {
            $message = $message . addYesNoAnswer("");
        }
        else if(ValidateInput($question))
        {
            $message = $message . addYesNoAnswer($question);
            //Only if the answer is true show the reasoin.
            if($question == "true")
            {
                NewRow($message, $reason);
            }
        }
        else
        {
            //Just incase there is an error there will always be something.
            $message = $message . addYesNoAnswer("");
        }


        return $message;
    }


    function SetStickyVar($var)
    {
        if($var != "" && isset($var))
        {
            return $var;
        }
        else {
            return "";
        }
    }

    function StickyRadioButton($bool, $value)
    {
        //Double true
        if($bool && $value == "true")
        {
            echo "checked='checked'";
        }
        //Double False;
        else if(!$bool && $value == "false"){
            echo "checked='checked'";
        }
        //one of these things is not like the other.
        else
        {
            echo "";
        }
    }

?>