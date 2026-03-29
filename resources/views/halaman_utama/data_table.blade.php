<table class="table caption-top">
  <thead>
    <tr>
      <th scope="col">Fullname</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Website</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datas as $data)
        <tr>
          <td>{{ $data['name'] }}</td>
          <td>{{ $data['username'] }}</td>
          <td><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></td>
          <td><a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a></td>
          <td><a href="http://www.{{ $data['website'] }}">{{ $data['website'] }}</a></td>
          <td>
            <a class="btn btn-sm btn-primary"
              href="{{ route('halaman_utama.show',$data['id']) }}" title="Lihat Detail">
              <i class="fa fa-eye"></i>
            </a>
            <a class="btn btn-sm btn-warning"
              href="{{ route('halaman_utama.edit',$data['id']) }}" title="Ubah Data">
              <i class="fa fa-pencil"></i>
            </a>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>