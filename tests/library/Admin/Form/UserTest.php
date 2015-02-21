<?php

class Admin_Form_UserTest extends CMTest_TestCase {

    public function testProcess() {
        $admin = Denkmal_Model_User::create('admin@denkmal.org', 'admin', 'pass');
        $admin->getRoles()->add(Denkmal_Role::ADMIN);

        $form = new Admin_Form_User();
        $action = new Admin_FormAction_User_Create($form);
        $request = $this->createRequestFormAction($action, [
            'email'    => 'foo@example.com',
            'username' => 'foo',
            'password' => 'pass'
        ]);
        $request->mockMethod('getViewer')->set($admin);
        $response = new CM_Http_Response_View_Form($request, $this->getServiceManager());
        $response->process();

        $this->assertFormResponseSuccess($response);

        $user = Denkmal_Model_User::findByEmail('foo@example.com');
        $this->assertNotNull($user);
        $this->assertSame(null, $user->getLanguage());
        $this->assertSame('foo@example.com', $user->getEmail());
        $this->assertSame('foo', $user->getUsername());

        $this->assertEquals($user, Denkmal_Model_User::authenticate('foo@example.com', 'pass'));
    }
}
