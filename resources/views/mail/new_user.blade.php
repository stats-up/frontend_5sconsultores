<table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" style="height:auto !important; margin:0; padding:0; width:100% !important; color:#474747;">
    <tr>
        <td style="">
            <div id="tablewrap" style="width:100% !important; max-width:600px !important; text-align:center !important; margin-top:0 !important; margin-right: auto !important; margin-bottom:0 !important; margin-left: auto !important;">
                <table id="contenttable" width="600" align="center" cellpadding="0" cellspacing="0" border="0" style="background-color:#FFFFFF; text-align:center !important; margin-top:0 !important; margin-right: auto !important; margin-bottom:0 !important; margin-left: auto !important; border:none; width: 100% !important; max-width:600px !important; ">
                    <tr>
                        <td width="100%" >
                            <table style="border-bottom: 3px solid #e0ae43de" bgcolor="#252525" border="0" cellspacing="0" cellpadding="0" width="100%">
                                <tr>
                                    <td style="text-align:left;padding:10px 25px">
                                        <a href="#" style="font-family: Arial, Helvetica, sans-serif; color: #e0ae43de; font-size: 40px; text-decoration: none">
                                            {{$title}}
                                        </a>
                                    </td>
                                    <td style="padding: 5px 25px;">
                                       
                                    </td>
                                </tr>
                            </table>
                            <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="25" width="100%">
                                <tr>
                                    <td width="100%" style="text-align:left;background-color: #F7F7F9;">
                                        <p style="color:#000000de; font-family:Arial, Helvetica, sans-serif; font-size:24px; line-height:32px; margin-top:0; margin-bottom:20px; padding:0; font-weight: 600;">
                                            Hola {{$name}}
                                        </p>
                                        <p style="color:#474747; font-family:Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22px; margin-top:0; margin-bottom:20px; padding:0; font-weight:normal;">
                                           Se ha creado una cuenta de <b>{{getenv("APP_NAME")}}</b>.
                                        </p>
                                        
                                        <table border="0" cellspacing="0" cellpadding="0" width="100%" class="emailwrapto100pc">
                                            <tr>
                                                <td class="emailcolsplit" align="left" valign="top" width="58%">
                                                    <p style="color:#474747; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height: 22px; margin-top:0; margin-bottom:20px; padding:0; font-weight:normal;">
                                                       Para aceptar e ingresar haga click en el siguiente botón
                                                    </p>
                                                    <a style="font-weight:bold; display: block; text-decoration:none; margin: 0 15px 20px; text-align: center;" target="_blank" href="{{$url}}">
                                                        <div style="display:block; height:auto !important;background-color:#e0ae43de;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px;border-radius:4px;color:#ffffff;font-size:24px;font-family:Arial, Helvetica, sans-serif; margin: 0 auto;">
                                                            Activar mi cuenta
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>                                                
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" width="100%">
                                <tr>
                                    <td width="100%" bgcolor="#ffffff" style="text-align:center;">
                                    </td>
                                </tr>
                            </table>                                                 
                        </td>
                    </tr>                      
                </table>
            </div>
        </td>
    </tr>
</table>
