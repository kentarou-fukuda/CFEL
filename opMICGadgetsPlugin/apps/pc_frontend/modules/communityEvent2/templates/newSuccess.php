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
$options = array();
$options['title'] = __('Create a new event');
$options['url'] = url_for('communityEvent_create', $community);
$options['isMultipart'] = true;
op_include_form('formCommunityEvent', $form, $options);
?>
