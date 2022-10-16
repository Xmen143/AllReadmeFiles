<?php

$myfile = fopen("newfilessssss.tf", "w") or die("Unable to open file!");
#$txt = "John Doe\n";
fwrite($myfile, $txt);

$txt = <<<EOD
data "azurerm_subscriptions" "available" {
display_name_contains  = "CXIO Azure Subscription 2022"
display_name_prefix  = "CXIO Azure Subscription 2022"

}

output "available_subscriptions" {
  value = data.azurerm_subscriptions.available.subscriptions
}

output "first_available_subscription_display_name" {
  value = data.azurerm_subscriptions.available.subscriptions[0].display_name
}

output "available_subscriptions1" {
  value = data.azurerm_subscriptions.available.subscriptions.subscription_id
}

output "first_available_subscription_display_name1" {
  value = data.azurerm_subscriptions.available.subscriptions[0].id
}
EOD;
fwrite($myfile, $txt);
fclose($myfile);

// $output = shell_exec('terraform init');
// echo "<pre>$output</pre>";

// $output = shell_exec('terraform apply');
// echo "<pre>$output</pre>";

// $output = shell_exec('terraform output available_subscriptions1');
// echo "<pre>$output</pre>";
?>