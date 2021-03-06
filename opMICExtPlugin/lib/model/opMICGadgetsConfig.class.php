<?php
/*******************************************************************************
 * Copyright (c) 2011, 2014 IBM Corporation and Others
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *   IBM Corporation - initial API and implementation
 *******************************************************************************/

class opMICExtConfig{
	public static function getD3URL(){
		return Doctrine::getTable('SnsConfig')->get('op_micext_plugin_d3_url', '//cdnjs.cloudflare.com/ajax/libs/d3/3.4.3/d3.min.js');
	}
	public static function getBargraphCluserExt(){
		return Doctrine::getTable("SnsConfig")->get("op_micext_plugin_brgr_cls_ext", "");
	}

	public static function getRelVisQueryTarget(){
		return Doctrine::getTable("SnsConfig")->get("op_micext_plugin_rel_query_target", "all");
	}
	public static function getRelVisQueryTargetId(){
		return Doctrine::getTable("SnsConfig")->get("op_micext_plugin_rel_query_target_id", "");
	}
	public static function getRelVisQueryExcludeId(){
		return Doctrine::getTable("SnsConfig")->get("op_micext_plugin_rel_query_exclude_id", "");
	}
	public static function getRelVisQueryDuration(){
		return Doctrine::getTable("SnsConfig")->get("op_micext_plugin_rel_query_duration", "90d");
	}
}