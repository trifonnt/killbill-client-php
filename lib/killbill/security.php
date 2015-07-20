<?php

/*
 * Copyright 2015 Trifon Trifonov
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once(dirname(__FILE__) . '/gen/killbill_user_roles_attributes.php');

class Killbill_Security extends Killbill_UserRolesAttributes {

	public function createUser($user, $reason, $comment, $headers = null) {
		$response = $this->_create(Killbill_Client::PATH_SECURITY_USERS, $user, $reason, $comment, $headers);

//		return $this->_getFromResponse('Killbill_SubjectAttributes', $response, $this->getTenantHeaders());
		return $this->_getFromResponse('Killbill_Security', $response, $this->getTenantHeaders());
	}

	public function getTenantHeaders()
	{
		return array(
			'X-Killbill-ApiKey: ' . $this->apiKey,
			'X-Killbill-ApiSecret: ' . $this->apiSecret
		);
	}
}