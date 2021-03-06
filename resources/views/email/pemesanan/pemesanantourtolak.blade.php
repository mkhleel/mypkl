@extends('email.layouts.app')

@section('content')
  <div class="body">
    <div class="line">
      Hi, {{ $pemesanan->name }}<br>
      Pemesanan Tour Anda tolak. Dengan Kode Booking {{ $pemesanan->code_booking }}.
      Dengan Alasan {{ $pemesanan->reason_rejection }}
    </div>
    <p>Silahkan Pilih Paket Tour Lain nya dengan mengklik tombol di bawah ini.</p>
    <div class="action">
      <a href="{{ url('/tour') }}" target="_blank">Paket Tour</a>
    </div>
    <p>Silahkan Request Ulang Lain nya dengan mengklik tombol di bawah ini.</p>
    <div class="action">
      <a href="{{ url('/tour/request') }}" target="_blank">Request Ulang</a>
    </div>
    <div class="line">
      Terima Kasih Telah Menggunakan Jasa Sako Holidays Untuk Menemani Perjalanan Anda.
      <br>
      Salam,<br>
      Sako Holidays
    </div>
  </div>
@endsection
