
<script type="text/javascript">

			var $zoho= $zoho || {salesiq:{values:{},ready:function(){}}}; var d=document; s=d.createElement('script'); s.type='text/javascript'; s.defer=true; s.src='https://salesiq.zoho.com/instinctoolswebsite/float.ls?embedname=instinctoolswebsite'; t=d.getElementsByTagName('script')[0]; t.parentNode.insertBefore(s,t);
			




function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

$zoho.salesiq.ready=function(embedinfo)
{

var zohoId = getCookie('zohoId');   
var zohoContactId = getCookie('zohoContactId'); 
var zohoCompany = getCookie('zohoCompany');  
var zohoFirstName = getCookie('zohoFirstName');  
var zohoLastName = getCookie('zohoLastName');  
var zohoEmail = getCookie('zohoEmail');

var zohoFullName = zohoFirstName + ' ' + zohoLastName;

	if (zohoEmail.length > 0 && zohoFullName.length > 0)
	{
		$zoho.salesiq.visitor.name(zohoFullName);
		$zoho.salesiq.visitor.email(zohoEmail);
	}

}
</script>	  
