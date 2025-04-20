{{-- <style>
    .sent {
        background: rgb(216, 236, 255);
        float: right;
        text-align: right;
        color: white;
    }

    .sent-content {
        color: black;
    }
</style> --}}

<div class="message-wrapper">
    <ul class="messages">
        @foreach ($messages as $message)
            <li class="message clearfix">
                <div class="{{ $message->nv_id_tntu == Auth::id() ? 'sent' : 'received' }}">
                    <p class="{{ $message->nv_id_tntu == Auth::id() ? 'sent-content' : '' }}">{{ $message->tn_tinnhan }}
                    </p>
                    <p class="date">{{ date('d M y, h:i a', strtotime($message->tn_thoigian)) }}</p>
                </div>
            </li>
        @endforeach


    </ul>
</div>
<div class="input-text" style="display: flex;">
    <input type="text" placeholder="Nhập nội dung tin nhắn..." name="message" class="submit">
    <button class="btn-primary btn-sm mt-3 button-text px-4 ml-1">Gửi</button>
    {{-- <input type="button" class="button-text btn-primary btn-sm" value="Gửi"> --}}
</div>
