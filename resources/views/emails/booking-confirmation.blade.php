<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Booking Notification</title>
</head>
<body style="margin:0;padding:0;background-color:#f4f6f9;font-family:'Helvetica Neue',Arial,sans-serif;">

<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f9;padding:30px 0;">
<tr>
<td align="center">

<table role="presentation" width="620" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:10px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.08);">

    <!-- Header -->
    <tr>
        <td style="background:linear-gradient(135deg,#0b5ed7,#0a4bb5);padding:30px 40px;text-align:center;">
            <h1 style="color:#ffffff;margin:0;font-size:24px;letter-spacing:0.5px;">MoveSmart Plus</h1>
            <p style="color:#dbe8ff;margin:6px 0 0;font-size:14px;">New Relocation Booking Received</p>
        </td>
    </tr>

    <!-- Intro Banner -->
    <tr>
        <td style="padding:30px 40px 10px;">
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#eef6ff;border-left:4px solid #0b5ed7;border-radius:6px;">
                <tr>
                    <td style="padding:14px 18px;">
                        <p style="margin:0;color:#0b5ed7;font-size:15px;font-weight:700;">
                            Booking No: {{ $booking->booking_no }}
                        </p>
                        <p style="margin:4px 0 0;color:#555;font-size:13px;">
                            Status: <strong>{{ $booking->status }}</strong> &nbsp;|&nbsp;
                            Received: {{ $booking->created_at?->format('d M Y, h:i A') }}
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Customer Details -->
    <tr>
        <td style="padding:24px 40px 0;">
            <h3 style="color:#0b5ed7;font-size:15px;border-bottom:2px solid #eef2f8;padding-bottom:8px;margin:0 0 12px;">
                👤 Customer Details
            </h3>
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="padding:5px 0;color:#888;font-size:13px;width:38%;">Name</td>
                    <td style="padding:5px 0;color:#1a1a1a;font-size:13px;font-weight:600;">{{ $booking->customer_name }}</td>
                </tr>
                <tr>
                    <td style="padding:5px 0;color:#888;font-size:13px;">Phone</td>
                    <td style="padding:5px 0;color:#1a1a1a;font-size:13px;font-weight:600;">
                        <a href="tel:{{ $booking->phone }}" style="color:#1a1a1a;text-decoration:none;">{{ $booking->phone }}</a>
                    </td>
                </tr>
                @if($booking->email)
                <tr>
                    <td style="padding:5px 0;color:#888;font-size:13px;">Email</td>
                    <td style="padding:5px 0;color:#1a1a1a;font-size:13px;font-weight:600;">
                        <a href="mailto:{{ $booking->email }}" style="color:#1a1a1a;text-decoration:none;">{{ $booking->email }}</a>
                    </td>
                </tr>
                @endif
                <tr>
                    <td style="padding:5px 0;color:#888;font-size:13px;">Relocation Type</td>
                    <td style="padding:5px 0;color:#1a1a1a;font-size:13px;font-weight:600;">{{ $booking->relocation_type }}</td>
                </tr>
                @if($booking->configuration)
                <tr>
                    <td style="padding:5px 0;color:#888;font-size:13px;">Configuration</td>
                    <td style="padding:5px 0;color:#1a1a1a;font-size:13px;font-weight:600;">{{ $booking->configuration }}</td>
                </tr>
                @endif
            </table>
        </td>
    </tr>

    <!-- Pickup & Destination -->
    <!-- Pickup & Destination -->
    <tr>
        <td style="padding:24px 40px 0;">
            <h3 style="color:#0b5ed7;font-size:15px;border-bottom:2px solid #eef2f8;padding-bottom:8px;margin:0 0 12px;">
                📍 Pickup & Destination
            </h3>
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td valign="top" width="50%" style="padding:0 8px 0 0;">
                        <p style="margin:0 0 4px;color:#0b5ed7;font-size:13px;font-weight:700;">PICKUP</p>
                        <p style="margin:0;color:#1a1a1a;font-size:13px;line-height:1.5;">
                            {{ $booking->pickup_address }}<br>
                            {{ $booking->pickupCity->city_name ?? '' }}{{ $booking->pickupCity->state_name ?? '' ? ', ' . $booking->pickupCity->state_name : '' }}
                        </p>
                        <p style="margin:8px 0 0;color:#777;font-size:12px;">
                            Floor: {{ $booking->pickup_floor }} &nbsp;|&nbsp; Lift: {{ $booking->pickup_lift ? 'Yes' : 'No' }}
                        </p>
                    </td>
                    <td valign="top" width="50%" style="padding:0 0 0 8px;border-left:1px dashed #ddd;">
                        <p style="margin:0 0 4px;color:#0b5ed7;font-size:13px;font-weight:700;padding-left:8px;">DESTINATION</p>
                        <p style="margin:0;color:#1a1a1a;font-size:13px;line-height:1.5;padding-left:8px;">
                            {{ $booking->destination_address }}<br>
                            {{ $booking->destinationCity->city_name ?? '' }}{{ $booking->destinationCity->state_name ?? '' ? ', ' . $booking->destinationCity->state_name : '' }}
                        </p>
                        <p style="margin:8px 0 0;color:#777;font-size:12px;padding-left:8px;">
                            Floor: {{ $booking->destination_floor }} &nbsp;|&nbsp; Lift: {{ $booking->destination_lift ? 'Yes' : 'No' }}
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- Move Schedule -->
    <tr>
        <td style="padding:24px 40px 0;">
            <h3 style="color:#0b5ed7;font-size:15px;border-bottom:2px solid #eef2f8;padding-bottom:8px;margin:0 0 12px;">
                📅 Move Schedule
            </h3>
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="padding:5px 0;color:#888;font-size:13px;width:38%;">Moving Date</td>
                    <td style="padding:5px 0;color:#1a1a1a;font-size:13px;font-weight:600;">
                        {{ $booking->moving_date ? \Carbon\Carbon::parse($booking->moving_date)->format('d M Y') : 'Not specified' }}
                    </td>
                </tr>
                <tr>
                    <td style="padding:5px 0;color:#888;font-size:13px;">Preferred Time</td>
                    <td style="padding:5px 0;color:#1a1a1a;font-size:13px;font-weight:600;">{{ $booking->moving_time ?? 'Not specified' }}</td>
                </tr>
                <tr>
                    <td style="padding:5px 0;color:#888;font-size:13px;">Vehicle Type</td>
                    <td style="padding:5px 0;color:#1a1a1a;font-size:13px;font-weight:600;">{{ $booking->vehicle_type ?? 'Not specified' }}</td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Services Requested -->
    <tr>
        <td style="padding:24px 40px 0;">
            <h3 style="color:#0b5ed7;font-size:15px;border-bottom:2px solid #eef2f8;padding-bottom:8px;margin:0 0 12px;">
                🛠️ Services Requested
            </h3>
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    @php
                        $services = [
                            'Packing' => $booking->packing_required,
                            'Loading' => $booking->loading_required,
                            'Unloading' => $booking->unloading_required,
                            'Unpacking' => $booking->unpacking_required,
                            'Insurance' => $booking->insurance_required,
                            'Storage' => $booking->storage_required,
                        ];
                    @endphp
                    @foreach($services as $label => $enabled)
                        <td style="padding:4px 0;width:33%;">
                            <span style="display:inline-block;font-size:12px;padding:4px 10px;border-radius:20px;
                                background:{{ $enabled ? '#e6f4ea' : '#f5f5f5' }};
                                color:{{ $enabled ? '#1e7b34' : '#999' }};">
                                {{ $enabled ? '✓' : '✕' }} {{ $label }}
                            </span>
                        </td>
                        @if(($loop->iteration) % 3 == 0)
                            </tr><tr>
                        @endif
                    @endforeach
                </tr>
            </table>
        </td>
    </tr>

    <!-- Inventory Items -->
    @if($booking->inventoryItems->count())
    <tr>
        <td style="padding:24px 40px 0;">
            <h3 style="color:#0b5ed7;font-size:15px;border-bottom:2px solid #eef2f8;padding-bottom:8px;margin:0 0 12px;">
                📦 Inventory Items
            </h3>
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                <tr style="background:#f4f6f9;">
                    <td style="padding:8px 10px;font-size:12px;color:#888;font-weight:600;">Item</td>
                    <td style="padding:8px 10px;font-size:12px;color:#888;font-weight:600;">Category</td>
                    <td style="padding:8px 10px;font-size:12px;color:#888;font-weight:600;text-align:center;">Qty</td>
                </tr>
                @foreach($booking->inventoryItems as $item)
                    <tr>
                        <td style="padding:8px 10px;font-size:13px;color:#333;border-bottom:1px solid #f0f0f0;">{{ $item->item_name }}</td>
                        <td style="padding:8px 10px;font-size:13px;color:#666;border-bottom:1px solid #f0f0f0;">{{ $item->category->name ?? '-' }}</td>
                        <td style="padding:8px 10px;font-size:13px;color:#333;text-align:center;border-bottom:1px solid #f0f0f0;">{{ $item->pivot->quantity }}</td>
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
    @endif

    <!-- Remarks -->
    @if($booking->remarks)
    <tr>
        <td style="padding:24px 40px 0;">
            <h3 style="color:#0b5ed7;font-size:15px;border-bottom:2px solid #eef2f8;padding-bottom:8px;margin:0 0 12px;">
                📝 Customer Remarks
            </h3>
            <p style="color:#555;font-size:13px;line-height:1.6;background:#f9f9f9;padding:12px 14px;border-radius:6px;margin:0;">
                {{ $booking->remarks }}
            </p>
        </td>
    </tr>
    @endif

    <!-- CTA -->
    <tr>
        <td style="padding:30px 40px;">
            <p style="color:#555555;font-size:14px;line-height:1.6;margin:0 0 16px;">
                Please contact the customer to confirm the schedule and finalize the quote.
            </p>
            <a href="tel:{{ $booking->phone }}"
               style="display:inline-block;background:#0b5ed7;color:#ffffff;text-decoration:none;padding:12px 24px;border-radius:6px;font-size:14px;font-weight:600;">
                📞 Call Customer
            </a>
        </td>
    </tr>

    <!-- Footer -->
    <tr>
        <td style="background:#f4f6f9;padding:20px 40px;text-align:center;">
            <p style="color:#999999;font-size:12px;margin:0;">
                Automated notification from the MoveSmart Plus booking system.
            </p>
        </td>
    </tr>

</table>
</td>
</tr>
</table>
</body>
</html>