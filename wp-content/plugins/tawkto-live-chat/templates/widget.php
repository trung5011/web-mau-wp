<!--Start of Tawk.to Script (0.3.3)-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{};
<?php 
if(!is_null($customer_details)) {
	echo 'Tawk_API.visitor = '. $customer_details.';';
}
?>
var Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/<?php echo $page_id ?>/<?php echo $widget_id ?>';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script (0.3.3)-->