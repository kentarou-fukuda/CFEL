<?php
/*******************************************************************************
 * Copyright (c) 2011, 2013 IBM Corporation and Others
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *   IBM Corporation - initial API and implementation
 *******************************************************************************/
?>
<script type="text/javascript">
$(document).ready(function(){
	var __elemLoggerConfig = [<?php echo html_entity_decode($elemLoggerConfig) ?>];


	var postPageEvent = function(evt){
		$.post(openpne.apiBase + 'dsls/addLog?apiKey=' + openpne.apiKey ,{
			'event': evt,
			'epoc': "" + (new Date()).getTime()
		},function(data, status, xhr){
//			console.log("a page event was successfully logged");
		}
		);
	};
	postPageEvent("load");
	$(window).focus(function(){
		postPageEvent("focus");
	});
	$(window).blur(function(){
		postPageEvent("blur");
	});
	var postElemEvent = function(params){
		$.post(openpne.apiBase + 'dsls/addElemLog?apiKey=' + openpne.apiKey ,{
			'event': params.event,
			'epoc': "" + (new Date()).getTime(),
			'props': params.props || undefined,
			'selector': params.selector
		},function(data, status, xhr){
//			console.log("an element event was successfully logged");
		}
		);
	};
	$(__elemLoggerConfig).each(function(){
		var selector = "" + this.selector;
		var evt = "" + this.event;
		var props = this.props;
		$("" + selector)[evt](function(){
			var data = null;
			var tmp = this;
			if(props){
				data = {};
				$(props).each(function(){
					data["" + this] = tmp["" + this];
				});
			}
			postElemEvent({"selector":selector, "event":evt, "props": data});
		});
	});
});

</script>
