<?php
/*
 * Copyright (c) 2020 PayGate (Pty) Ltd
 *
 * Author: App Inlet (Pty) Ltd
 *
 * Released under the GNU General Public License
 */

if ( interface_exists( "Magento\Framework\App\CsrfAwareActionInterface" ) ) {
    class_alias( 'SID\InstantEFT\Controller\AbstractSIDm230', 'SID\InstantEFT\Controller\AbstractSID' );
} else {
    class_alias( 'SID\InstantEFT\Controller\AbstractSIDm220', 'SID\InstantEFT\Controller\AbstractSID' );
}