.BJ/KI098<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your OTP Code</title>
</head>
<body style="margin:0; padding:0; background:#f1f5f9; font-family:Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f1f5f9; padding:30px 0;">
    <tr>
        <td align="center">

            <!-- Card -->
            <table width="100%" cellpadding="0" cellspacing="0" style="max-width:600px; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 16px rgba(0,0,0,0.1);">

                <!-- Header -->
                <tr>
                    <td style="background:#4f46e5; padding:20px 30px; color:#ffffff; text-align:center;">
                        <h2 style="margin:0; font-size:22px; font-weight:600;">Your One-Time Password</h2>
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:30px 30px;">
                        <p style="font-size:16px; margin:0 0 15px; color:#1e293b;">Hello <strong>{{$details['email']}}</strong>,</p>

                        <p style="font-size:15px; margin:0 0 20px; color:#334155;">
                            Use the verification code below to complete your login or verification process.
                            This code is valid for <strong>10 minutes</strong>.
                        </p>

                        <!-- OTP BOX -->
                        <table width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="center" style="padding:20px 0;">
                                    <div style="display:inline-block; padding:14px 26px; font-size:28px; font-weight:bold; color:#4f46e5; border:2px dashed #4f46e5; border-radius:6px;">
                                        {{$details['otp']}}
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <p style="font-size:15px; color:#334155; margin:20px 0 0;">
                            If you didn’t request this code, please ignore this email or contact support.
                        </p>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background:#f8fafc; padding:20px 30px; text-align:center; font-size:13px; color:#64748b;">
                        © 2025 Deep Cabs. All rights reserved.
                    </td>
                </tr>

            </table>
            <!-- End Card -->

        </td>
    </tr>
</table>

</body>
</html>
