public function q_view_buttons($q_view) {

 $this->output(
	     	        '<br/><div class="qa-social-buttons">',
'Share this: <a rel="nofollow" href="#" onclick="window.open(\'https://www.facebook.com/sharer/sharer.php?u=\'+encodeURIComponent(location.href), \'facebook-share-dialog\', \'width=626,height=436\'); return false;"> <img src="../media/SVG/facebook.svg" style="max-height:20px;" width="18" height="18" /></a>&nbsp;&nbsp;',
'<a rel="nofollow" href="#" onclick="window.open(\'https://reddit.com/submit?url=\'+encodeURIComponent(location.href), \'reddit-share-dialog\', \'width=626,height=436\'); return false;"> <img src="../media/SVG/reddit.svg"  width="18" height="18" /></a>&nbsp;&nbsp;&nbsp;',
'<a rel="nofollow" href="javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;https://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());"> <img src="../media/SVG/pinterest.svg"  width="18" height="18" /></a>&nbsp;&nbsp;',
	        '</div>'
	    );
	    qa_html_theme_base::q_view_buttons($q_view);
	}
