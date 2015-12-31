<?php

class ContactDetailsConfig extends DataExtension
{

    private static $db = array(
        'ContactDetailsName'    => 'varchar',
        'ContactDetailsAddress' => 'text',
        'ContactDetailsPhone'   => 'varchar',
        'ContactDetailsEmail'   => 'varchar',
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab("Root.ContactDetails", new TextField("ContactDetailsName", "Name"));
        $fields->addFieldToTab("Root.ContactDetails", new TextareaField("ContactDetailsAddress", "Address"));
        $fields->addFieldToTab("Root.ContactDetails", new TextField("ContactDetailsPhone", "Phone"));
        $fields->addFieldToTab("Root.ContactDetails", new EmailField("ContactDetailsEmail", "Email"));
    }
}
