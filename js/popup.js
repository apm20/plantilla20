<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.availWidth)/2 : 0;
TopPosition = (screen.height) ? (screen.availHeight)/2 : 0;
settings = 'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
popupWindow = window.open(url,winName,settings)
}
</script>
