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
use_helper('opNotificationdsl');
$data = array();

foreach ($notifications as $notification){
	$data[] = op_api_notification_dsl($notification);
}

return array(
	'status' => 'success',
	'data' => $data
);
