/* 
*  Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
*  SPDX-License-Identifier: Apache-2.0
*/

<?php

//{fact rule=open-redirect@v1.0 defect=1}
header('Location: '.$_SERVER["REQUEST_URI"]);
//{/fact}
