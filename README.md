# Magento Extension: Set Session Variables with ajax
This Magento Extension allows you to easily set session variables per ajax.

## Install
Just copy and paste the files in your Magento dir

## Use
After you installed the extension you can use the following URLs to set/unset Magento Session Varialbles:
* Set example with value 0: http://www.domain.com/ajaxsession/value/set/key/example/value/0/
* Unset variable with key example: http://www.domain.com/ajaxsession/value/unset/key/example/

(Just replace "example" with your key and replace 0 with your value

To avoid conflicts the module automatically adds the prefix **ajaxsession_**. This means you can access your variable like that in any place:
 
```
Mage::getSingleton('core/session')->getData('ajaxsession_example'))
```

## Ajax Call
You can easily call the target URL via jQuery Get like that:
```
$.get(http://www.domain.com/ajaxsession/value/unset/key/example/);
```

Additionally the module gives a json response with the variable **response** that is either true (if everything worked out) or false if something went wront.
