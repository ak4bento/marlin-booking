<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 30%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

.b {
  color: blue;
}

.m {
  color: red;
}

.h {
  color: green;
}

</style>
</head>
<body>

<h2>Hasil Test</h2>

<table>
  <tr>
    <th>No</th>
    <th>Hasil</th>
  </tr>
  @php
  $no = 1;
  @endphp

  @foreach($hasil as $hsl)
  <tr>
    <td>{{$no++}}</td>
    <td><b>{!!$hsl!!}</b></td>
  </tr>
  @endforeach
</table>
<br>
<h4>Note : <br>- Warna biru kondisi awal <br>- Warna merah kondisi ke 2 <br>- Warna hijau kondisi terakhir  </h4>

</body>
</html>
