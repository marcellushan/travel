{{Form::select('return_time[]', ['01' => '01','02' => '02','03' => '03','04' => '04','05' => '05','06' => '06','07' => '07','08' => '08',
                              '09' => '09','10' => '10','11' => '11','12' => '12'], null, ['placeholder' => 'Pick a time'])}}
{{Form::select('return_time[]', ['00' => '00','15' => '15','30' => '30','45' => '45'])}}
{{Form::select('return_time[]', ['AM' => 'AM','PM' => 'PM'])}}