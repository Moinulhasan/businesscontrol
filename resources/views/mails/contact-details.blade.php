<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            font-family: 'Poppins', 'Segoe UI', Tahoma, sans-serif;
            color: #333;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 15px;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(8px);
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            max-width: 600px;
            width: 100%;
            padding: 40px 35px;
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            text-align: center;
            border-bottom: 3px solid #e5e7eb;
            margin-bottom: 25px;
            padding-bottom: 10px;
        }

        .header h2 {
            background: linear-gradient(90deg, #4f46e5, #9333ea);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 26px;
            margin: 0;
            font-weight: 700;
        }

        .detail {
            margin-bottom: 18px;
        }

        .label {
            font-size: 14px;
            font-weight: 600;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }

        .value {
            font-size: 16px;
            font-weight: 500;
            color: #1f2937;
            padding: 10px 15px;
            background: #f9fafb;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }

        .message-box {
            background: #f5f3ff;
            border-left: 4px solid #7c3aed;
            border-radius: 8px;
            padding: 15px 18px;
            color: #111827;
            font-size: 15px;
            line-height: 1.6;
            white-space: pre-line;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 13px;
            color: #6b7280;
            border-top: 1px solid #e5e7eb;
            padding-top: 15px;
        }

        .highlight {
            color: #4f46e5;
            font-weight: 600;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="card">
        <div class="header">
            <h2>📩 New Contact Form Message</h2>
        </div>

        <div class="detail">
            <div class="label">Full Name</div>
            <div class="value">{{ $full_name }}</div>
        </div>

        <div class="detail">
            <div class="label">Email Address</div>
            <div class="value">{{ $email }}</div>
        </div>

        @if(!empty($phone))
            <div class="detail">
                <div class="label">Phone Number</div>
                <div class="value">{{ $phone }}</div>
            </div>
        @endif

        @if(!empty($company))
            <div class="detail">
                <div class="label">Company Name</div>
                <div class="value">{{ $company }}</div>
            </div>
        @endif

        <div class="detail">
            <div class="label">Message</div>
            <div class="message-box">
                {{ $message_content }}
            </div>
        </div>

        @if($is_one_step)
            <div class="footer">
                This message was sent via <span class="highlight">oneStep</span>.
            </div>
        @else
            <div class="footer">
                This message was sent via <span class="highlight">Business Control</span>.
            </div>
        @endif
    </div>
</div>
</body>
</html>
