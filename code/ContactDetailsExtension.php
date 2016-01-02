<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactDetails
 *
 * @author Corey Sewell <corey@gdmedia.tv>
 */
class ContactDetailsExtension extends DataExtension
{

    public function ContactDetails()
    {
        return ContactDetails::create();
    }
}
