<?php

class ContactDetails extends ViewableData
{

    //    <% if $SiteConfig.ContactDetailsName %>
//    <span class="contact-name">$SiteConfig.ContactDetailsName</span>
//    <% end_if %>
//    <% if $SiteConfig.ContactDetailsAddress %>
//    <span class="contact-address">$SiteConfig.ContactDetailsAddress</span>
//    <% end_if %>
//    <% if $SiteConfig.ContactDetailsPhone %>
//    <span class="contact-phone">$SiteConfig.ContactDetailsPhone</span>
//    <% end_if %>
//    <% if $SiteConfig.ContactDetailsEmail %>
//    <a class="contact-email" href="mailto:$SiteConfig.ContactDetailsEmail">$SiteConfig.ContactDetailsEmail</a>
//    <% end_if %>

    public function Name()
    {
        return SiteConfig::current_site_config()->ContactDetailsName;
    }

    public function Address()
    {
        return nl2br(SiteConfig::current_site_config()->ContactDetailsAddress);
    }

    public function Phone()
    {
        return SiteConfig::current_site_config()->ContactDetailsPhone;
    }

    public function Email()
    {
        return SiteConfig::current_site_config()->ContactDetailsEmail;
    }

    public function forTemplate()
    {
        return $this->renderWith('ContactDetails');
    }
}
