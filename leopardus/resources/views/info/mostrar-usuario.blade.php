@extends('layouts.dashboard')

@section('content')
{{-- option datatable --}}
@include('dashboard.componentView.optionDatatable')


<div class="card bg-blue-dark text-white">
    <div class="card-content">
        <div class="card-body">
            <div class="table-responsive">
                <table id="mytable" class="table zero-configuration">
				<thead>
					<tr class="color">
						<th class="text-center">#</th>
						<th class="text-center">Nombre</th>
						<th class="text-center">Nombre Completo</th>
						<th class="text-center">Parocinador</th>
						<th class="text-center">Direccion</th>
						<th class="text-center">Telefono</th>
						<th class="text-center">Wallet</th>
						<th class="text-center">Correo</th>
						<th class="text-center">Fecha de inscripcion</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($buscar as $bus)

					@php
					$referido = DB::table($settings->prefijo_wp.'users')
					->select('user_nicename')
					->where('ID', '=', $bus->referred_id)
					->get();

					$faltante = DB::table('user_campo')
					->where('ID', '=', $bus->ID)
					->get();
					@endphp

					<tr>
						@foreach($faltante as $falta)
						<td class="text-center">{{ $falta->ID }}</td>
						<td class="text-center">{{ $bus->user_nicename }}</td>
						<td class="text-center">{{$falta->firstname}} {{$falta->lastname}}</td>


						@foreach($referido as $refe)
						<td class="text-center">{{ $refe->user_nicename }}</td>
						@endforeach

						@if($falta->ID==1)
						<td class="text-center">N/A</td>
						@endif



						<td class="text-center">{{ $falta->direccion }}</td>
						<td class="text-center">{{ $falta->phone }}</td>
						<td class="text-center">{{ $bus->wallet_amount}}</td>
						@endforeach
						<td class="text-center">{{ $bus->user_email }}</td>
						<td class="text-center">{{ date('d-m-Y', strtotime($bus->created_at)) }}</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
</div>
</div>

@endsection