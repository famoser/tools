<?php


 function autoload_5af4d4504f2b8e6fb4852d1f8fd748ec($class)
{
    $classes = array(
        'Famoser\MBOApiWrapper\StaffService\Staff_x0020_Service' => __DIR__ .'/Staff_x0020_Service.php',
        'Famoser\MBOApiWrapper\StaffService\GetStaff' => __DIR__ .'/GetStaff.php',
        'Famoser\MBOApiWrapper\StaffService\GetStaffRequest' => __DIR__ .'/GetStaffRequest.php',
        'Famoser\MBOApiWrapper\StaffService\MBRequest' => __DIR__ .'/MBRequest.php',
        'Famoser\MBOApiWrapper\StaffService\SourceCredentials' => __DIR__ .'/SourceCredentials.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfInt' => __DIR__ .'/ArrayOfInt.php',
        'Famoser\MBOApiWrapper\StaffService\UserCredentials' => __DIR__ .'/UserCredentials.php',
        'Famoser\MBOApiWrapper\StaffService\XMLDetailLevel' => __DIR__ .'/XMLDetailLevel.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfLong' => __DIR__ .'/ArrayOfLong.php',
        'Famoser\MBOApiWrapper\StaffService\StaffCredentials' => __DIR__ .'/StaffCredentials.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfStaffFilter' => __DIR__ .'/ArrayOfStaffFilter.php',
        'Famoser\MBOApiWrapper\StaffService\StaffFilter' => __DIR__ .'/StaffFilter.php',
        'Famoser\MBOApiWrapper\StaffService\GetStaffResponse' => __DIR__ .'/GetStaffResponse.php',
        'Famoser\MBOApiWrapper\StaffService\GetStaffResult' => __DIR__ .'/GetStaffResult.php',
        'Famoser\MBOApiWrapper\StaffService\MBResult' => __DIR__ .'/MBResult.php',
        'Famoser\MBOApiWrapper\StaffService\StatusCode' => __DIR__ .'/StatusCode.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfStaff' => __DIR__ .'/ArrayOfStaff.php',
        'Famoser\MBOApiWrapper\StaffService\Staff' => __DIR__ .'/Staff.php',
        'Famoser\MBOApiWrapper\StaffService\MBObject' => __DIR__ .'/MBObject.php',
        'Famoser\MBOApiWrapper\StaffService\Site' => __DIR__ .'/Site.php',
        'Famoser\MBOApiWrapper\StaffService\Resource' => __DIR__ .'/Resource.php',
        'Famoser\MBOApiWrapper\StaffService\ActionCode' => __DIR__ .'/ActionCode.php',
        'Famoser\MBOApiWrapper\StaffService\ClientService' => __DIR__ .'/ClientService.php',
        'Famoser\MBOApiWrapper\StaffService\Program' => __DIR__ .'/Program.php',
        'Famoser\MBOApiWrapper\StaffService\ScheduleType' => __DIR__ .'/ScheduleType.php',
        'Famoser\MBOApiWrapper\StaffService\SalesRep' => __DIR__ .'/SalesRep.php',
        'Famoser\MBOApiWrapper\StaffService\Rep' => __DIR__ .'/Rep.php',
        'Famoser\MBOApiWrapper\StaffService\ClientRelationship' => __DIR__ .'/ClientRelationship.php',
        'Famoser\MBOApiWrapper\StaffService\Client' => __DIR__ .'/Client.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfClientIndex' => __DIR__ .'/ArrayOfClientIndex.php',
        'Famoser\MBOApiWrapper\StaffService\ClientIndex' => __DIR__ .'/ClientIndex.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfClientIndexValue' => __DIR__ .'/ArrayOfClientIndexValue.php',
        'Famoser\MBOApiWrapper\StaffService\ClientIndexValue' => __DIR__ .'/ClientIndexValue.php',
        'Famoser\MBOApiWrapper\StaffService\ClientCreditCard' => __DIR__ .'/ClientCreditCard.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfClientRelationship' => __DIR__ .'/ArrayOfClientRelationship.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfRep' => __DIR__ .'/ArrayOfRep.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfSalesRep' => __DIR__ .'/ArrayOfSalesRep.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfCustomClientField' => __DIR__ .'/ArrayOfCustomClientField.php',
        'Famoser\MBOApiWrapper\StaffService\CustomClientField' => __DIR__ .'/CustomClientField.php',
        'Famoser\MBOApiWrapper\StaffService\Liability' => __DIR__ .'/Liability.php',
        'Famoser\MBOApiWrapper\StaffService\ProspectStage' => __DIR__ .'/ProspectStage.php',
        'Famoser\MBOApiWrapper\StaffService\Location' => __DIR__ .'/Location.php',
        'Famoser\MBOApiWrapper\StaffService\Relationship' => __DIR__ .'/Relationship.php',
        'Famoser\MBOApiWrapper\StaffService\SessionType' => __DIR__ .'/SessionType.php',
        'Famoser\MBOApiWrapper\StaffService\ScheduleItem' => __DIR__ .'/ScheduleItem.php',
        'Famoser\MBOApiWrapper\StaffService\Appointment' => __DIR__ .'/Appointment.php',
        'Famoser\MBOApiWrapper\StaffService\AppointmentStatus' => __DIR__ .'/AppointmentStatus.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfResource' => __DIR__ .'/ArrayOfResource.php',
        'Famoser\MBOApiWrapper\StaffService\Unavailability' => __DIR__ .'/Unavailability.php',
        'Famoser\MBOApiWrapper\StaffService\Availability' => __DIR__ .'/Availability.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfProgram' => __DIR__ .'/ArrayOfProgram.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfAppointment' => __DIR__ .'/ArrayOfAppointment.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfUnavailability' => __DIR__ .'/ArrayOfUnavailability.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfAvailability' => __DIR__ .'/ArrayOfAvailability.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfLocation' => __DIR__ .'/ArrayOfLocation.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfProviderIDUpdate' => __DIR__ .'/ArrayOfProviderIDUpdate.php',
        'Famoser\MBOApiWrapper\StaffService\ProviderIDUpdate' => __DIR__ .'/ProviderIDUpdate.php',
        'Famoser\MBOApiWrapper\StaffService\GetStaffPermissions' => __DIR__ .'/GetStaffPermissions.php',
        'Famoser\MBOApiWrapper\StaffService\GetStaffPermissionsRequest' => __DIR__ .'/GetStaffPermissionsRequest.php',
        'Famoser\MBOApiWrapper\StaffService\GetStaffPermissionsResponse' => __DIR__ .'/GetStaffPermissionsResponse.php',
        'Famoser\MBOApiWrapper\StaffService\GetStaffPermissionsResult' => __DIR__ .'/GetStaffPermissionsResult.php',
        'Famoser\MBOApiWrapper\StaffService\ArrayOfPermission' => __DIR__ .'/ArrayOfPermission.php',
        'Famoser\MBOApiWrapper\StaffService\Permission' => __DIR__ .'/Permission.php',
        'Famoser\MBOApiWrapper\StaffService\AddOrUpdateStaff' => __DIR__ .'/AddOrUpdateStaff.php',
        'Famoser\MBOApiWrapper\StaffService\AddOrUpdateStaffRequest' => __DIR__ .'/AddOrUpdateStaffRequest.php',
        'Famoser\MBOApiWrapper\StaffService\AddOrUpdateStaffResponse' => __DIR__ .'/AddOrUpdateStaffResponse.php',
        'Famoser\MBOApiWrapper\StaffService\AddOrUpdateStaffResult' => __DIR__ .'/AddOrUpdateStaffResult.php',
        'Famoser\MBOApiWrapper\StaffService\GetStaffImgURL' => __DIR__ .'/GetStaffImgURL.php',
        'Famoser\MBOApiWrapper\StaffService\GetStaffImgURLRequest' => __DIR__ .'/GetStaffImgURLRequest.php',
        'Famoser\MBOApiWrapper\StaffService\GetStaffImgURLResponse' => __DIR__ .'/GetStaffImgURLResponse.php',
        'Famoser\MBOApiWrapper\StaffService\GetStaffImgURLResult' => __DIR__ .'/GetStaffImgURLResult.php',
        'Famoser\MBOApiWrapper\StaffService\ValidateStaffLogin' => __DIR__ .'/ValidateStaffLogin.php',
        'Famoser\MBOApiWrapper\StaffService\ValidateLoginRequest' => __DIR__ .'/ValidateLoginRequest.php',
        'Famoser\MBOApiWrapper\StaffService\ValidateStaffLoginResponse' => __DIR__ .'/ValidateStaffLoginResponse.php',
        'Famoser\MBOApiWrapper\StaffService\ValidateLoginResult' => __DIR__ .'/ValidateLoginResult.php',
        'Famoser\MBOApiWrapper\StaffService\GetSalesReps' => __DIR__ .'/GetSalesReps.php',
        'Famoser\MBOApiWrapper\StaffService\GetSalesRepsRequest' => __DIR__ .'/GetSalesRepsRequest.php',
        'Famoser\MBOApiWrapper\StaffService\GetSalesRepsResponse' => __DIR__ .'/GetSalesRepsResponse.php',
        'Famoser\MBOApiWrapper\StaffService\GetSalesRepsResult' => __DIR__ .'/GetSalesRepsResult.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5af4d4504f2b8e6fb4852d1f8fd748ec');

// Do nothing. The rest is just leftovers from the code generation.
{
}
