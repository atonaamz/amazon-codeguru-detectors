/* 
*  Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
*  SPDX-License-Identifier: Apache-2.0
*/

<?php

//{fact rule=insecure-hashing@v1.0 defect=0}
function compliant($value) {
    $pass = hash('sha256', $value);
    $user->setPassword($pass);
}
//{/fact}
?>