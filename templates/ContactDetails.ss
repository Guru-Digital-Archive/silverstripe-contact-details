<div class="contact-details">
    <% if $Name %>
    <span class="contact-name">$Name</span>
    <% end_if %>
    <% if $Address %>
    <span class="contact-address">$Address</span>
    <% end_if %>
    <% if $Phone %>
    <span class="contact-phone">$Phone</span>
    <% end_if %>
    <% if $Email %>
    <a class="contact-email" href="mailto:$Email">$Email</a>
    <% end_if %>
</div>