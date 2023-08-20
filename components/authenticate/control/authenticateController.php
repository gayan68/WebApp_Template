<?php
        switch ($_REQUEST['action'])
        {
            case "show_login" :
                include_once  'components/authenticate/modle/authenticateModule.php';
                generateToken();
               if(isMobile())           
                	include_once  'components/authenticate/view/m_login.php';
                else
                	include_once  'components/authenticate/view/login.php';
            break;
            
            case "show_new" :
               include_once  'components/authenticate/modle/authenticateModule.php';
               getTimeZones();
               if(isMobile())           
                	include_once  'components/authenticate/view/m_new.php';
                else
                	include_once  'components/authenticate/view/new.php';
            break;
            
            case "show_forgot_password" :
                include_once  'components/authenticate/modle/authenticateModule.php';
               if(isMobile())           
                	include_once  'components/authenticate/view/m_password_forgot.php';
                else
                	include_once  'components/authenticate/view/password_forgot.php';
            break;
                        
            case "show_pwreset_form" :
                include_once  'components/authenticate/modle/authenticateModule.php';
               if(isMobile())           
                	include_once  'components/authenticate/view/m_password_forgot.php';
                else
                	include_once  'components/authenticate/view/password_forgot.php';
            break;

            case "show_pwchange_form" :
                include_once  'components/authenticate/modle/authenticateModule.php';
               if(isMobile())           
                	include_once  'components/authenticate/view/m_password_change.php';
                else
                	include_once  'components/authenticate/view/password_change.php';
            break;

            case "login" :
                include_once  'components/authenticate/modle/authenticateModule.php';
                if(login()){
                	header('Location: index.php?components=dashboard&action=home');
                }else{
                	header('Location: index.php?components=authenticate&action=show_login&message='.$message.'&re=fail');
                }
            break;
            
            case "logout" :
                include_once  'components/authenticate/modle/authenticateModule.php';
                if(logout())
                	header('Location: index.php?components=authenticate&action=show_login');
                else
                	header('Location: index.php?components=authenticate&action=show_login');
            break;
            
            case "change_pw" :
            if((isset($_SESSION['userkey']))||(isset($_COOKIE['userkey']))){
                include_once  'components/authenticate/modle/authenticateModule.php';
                generateToken();
               if(isMobile())           
                	include_once  'components/authenticate/view/m_change_pw.php';
                else
                	include_once  'components/authenticate/view/change_pw.php';
            }else 	header('Location: index.php?components=authenticate&action=login');
            break;
            
            case "set_pw" :
            if((isset($_SESSION['userkey']))||(isset($_COOKIE['userkey']))){
                include_once  'components/authenticate/modle/authenticateModule.php';
                if(changePassword()){
                	header('Location: index.php?components=authenticate&action=change_pw&message='.$message.'&re=success');
                }else{
                	header('Location: index.php?components=authenticate&action=change_pw&message='.$message.'&re=fail');
                }
            }else 	header('Location: index.php?components=authenticate&action=login');
            break;
            
            case "create_new" :
                include_once  'components/authenticate/modle/authenticateModule.php';
                if(createUser())
                	header('Location: index.php?components=authenticate&action=show_login&message='.$message.'&re=success');
                else
                	header('Location: index.php?components=authenticate&action=show_new&message='.$message.'&re=fail');
            break;
            
            case "activate" :
                include_once  'components/authenticate/modle/authenticateModule.php';
                if(activateUser())
                	header('Location: index.php?components=authenticate&action=show_login&message='.$message.'&re=success');
                else
                	header('Location: index.php?components=authenticate&action=show_login&message='.$message.'&re=fail');
            break;
            
            case "send_pw_reset" :
                include_once  'components/authenticate/modle/authenticateModule.php';
                if(sendPWreset())
                	header('Location: index.php?components=authenticate&action=show_login&message='.$message.'&re=success');
                else
                	header('Location: index.php?components=authenticate&action=show_forgot_password&message='.$message.'&re=fail');
            break;
            
            case "show_password_reset" :
                include_once  'components/authenticate/modle/authenticateModule.php';
                if(validatePasswordReset($_GET['token']))
                	header('Location: index.php?components=authenticate&action=show_pwreset_form&token='.$_GET['token'].'&message=Please Reset Your Password&re=success');
                else
                	header('Location: index.php?components=authenticate&action=show_login&message=Invalid Token&re=fail');
            break;
            
            case "reset_password" :
                include_once  'components/authenticate/modle/authenticateModule.php';
                if(resetPassword())
                	header('Location: index.php?components=authenticate&action=show_login&message='.$message.'&re=success');
                else
                	header('Location: index.php?components=authenticate&action=show_pwreset_form&token='.$_GET['token'].'&message='.$message.'&re=fail');
            break;
            
            case "change_password" :
                include_once  'components/authenticate/modle/authenticateModule.php';
                if(changePassword2())
                	header('Location: index.php?components=dashboard&action=home&message='.$message.'&re=success');
                else
                	header('Location: index.php?components=authenticate&action=show_pwchange_form&token='.$_GET['token'].'&message='.$message.'&re=fail');
            break;
                
            default:
                print '<p><srtong>Bad Request</strong></p>';
            break;
        }
?>