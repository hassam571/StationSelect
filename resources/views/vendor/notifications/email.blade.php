<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Notification</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f4f4f7;
            margin: 0;
            padding: 0;
            color: #51545e;
        }
        .email-wrapper {
            width: 100%;
            background-color: #f4f4f7;
            padding: 20px 0;
        }
        .email-content {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: rgba(248, 71, 62, 0.85);
            text-align: center;
            padding: 30px;
            color: #ffffff;
        }
        .email-header img {
            max-width: 120px;
            margin-bottom: 10px;
        }
        .email-header h1 {
            font-size: 24px;
            margin: 0;
            font-weight: bold;
        }
        .email-body {
            padding: 30px;
        }
        .email-body h1 {
            color: #333333;
            font-size: 22px;
            margin-bottom: 20px;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .email-footer {
            background-color: #f4f4f7;
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #888888;
        }
        a.action-button {
            display: inline-block;
            padding: 12px 25px;
            font-size: 16px;
            color: #ffffff;
            background-color: rgba(248, 71, 62, 0.85);
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        a.action-button:hover {
            background-color: rgba(230, 60, 50, 0.85);
        }
    </style>
</head>
<body>
<div class="email-wrapper">
    <div class="email-content">
        <div class="email-header">
            <img src="{{ asset('assets/frontend/img/logo1.png') }}" alt="Station Select Logo">
            <h1>Station Select</h1>
        </div>
        <div class="email-body">
            @if (!empty($greeting))
                <h1>{{ $greeting }}</h1>
            @else
                @if ($level === 'error')
                    <h1>@lang('Whoops!')</h1>
                @else
                    <h1>@lang('Hello!')</h1>
                @endif
            @endif

            @foreach ($introLines as $line)
                <p>{{ $line }}</p>
            @endforeach

            @isset($actionText)
                <div style="text-align: center; margin: 30px 0;">
                    <a href="{{ $actionUrl }}" class="action-button">{{ $actionText }}</a>
                </div>
            @endisset

            @foreach ($outroLines as $line)
                <p>{{ $line }}</p>
            @endforeach

            @if (!empty($salutation))
                <p>{{ $salutation }}</p>
            @else
                <p>@lang('Regards'),<br><strong>Select Station Team</strong></p>
            @endif

            @isset($actionText)
                <p style="font-size: 14px; color: #666666;">
                    @lang(
                        "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below into your web browser:",
                        [
                            'actionText' => $actionText,
                        ]
                    )
                    <br>
                    <a href="{{ $actionUrl }}" style="word-break: break-word; color: #f24b3a;">{{ $actionUrl }}</a>
                </p>
            @endisset
        </div>
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Station Select. All rights reserved.</p>
        </div>
    </div>
</div>
</body>
</html>
