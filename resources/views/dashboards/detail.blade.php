@extends('layout.master')

@section('content')

<style>
    a.tooltips {
        position: relative;
        display: inline;
        text-decoration: none;
    }
    a.tooltips span {
        position: absolute;
        width: 100px;
        color: #FFFFFF;
        background: #000000;
        height: 25px;
        line-height: 25px;
        text-align: center;
        visibility: hidden;
        border-radius: 3px;
    }
    a.tooltips span:after {
        content: '';
        position: absolute;
        bottom: 100%;
        left: 50%;
        margin-left: -8px;
        width: 0;
        height: 0;
        border-bottom: 8px solid #000000;
        border-right: 8px solid transparent;
        border-left: 8px solid transparent;
    }
    a:hover.tooltips span {
        visibility: visible;
        opacity: 0.8;
        top: 30px;
        left: 50%;
        margin-left: -76px;
        z-index: 999;
    }
    * {
        font-family: 'Roboto', sans-serif;
    }
    @keyframes click-wave {
        0% {
            height: 40px;
            width: 40px;
            opacity: 0.35;
            position: relative;
        }
        100% {
            height: 200px;
            width: 200px;
            margin-left: -80px;
            margin-top: -80px;
            opacity: 0;
        }
    }
    .option-input {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        position: relative;
        top: 13.33333px;
        right: 0;
        bottom: 0;
        left: 0;
        height: 40px;
        width: 40px;
        transition: all 0.15s ease-out 0s;
        background: #cbd1d8;
        border: none;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        margin-right: 0.5rem;
        outline: none;
        position: relative;
        z-index: 1000;
    }
    .option-input:hover {
        background: #9faab7;
    }
    .option-input:checked {
        background: #40e0d0;
    }
    .option-input:checked::before {
        height: 40px;
        width: 40px;
        position: absolute;
        content: '✔';
        display: inline-block;
        font-size: 26.66667px;
        text-align: center;
        line-height: 40px;
    }
    .option-input:checked::after {
        -webkit-animation: click-wave 0.65s;
        -moz-animation: click-wave 0.65s;
        animation: click-wave 0.65s;
        background: #40e0d0;
        content: '';
        display: block;
        position: relative;
        z-index: 100;
    }
    .option-input.radio {
        border-radius: 50%;
    }
    .option-input.radio::after {
        border-radius: 50%;
    }
 a.tooltips {
 position: relative;
 display: inline;
 text-decoration: none;
 }

 a.tooltips span {
 position: absolute;
 width: 100px;
 color: #FFFFFF;
 background: #000000;
 height: 25px;
 line-height: 25px;
 text-align: center;
 visibility: hidden;
 border-radius: 3px;
 }

 a.tooltips span:after {
 content: '';
 position: absolute;
 bottom: 100%;
 left: 50%;
 margin-left: -8px;
 width: 0;
 height: 0;
 border-bottom: 8px solid #000000;
 border-right: 8px solid transparent;
 border-left: 8px solid transparent;
 }

 a:hover.tooltips span {
 visibility: visible;
 opacity: 0.8;
 top: 30px;
 left: 50%;
 margin-left: -76px;
 z-index: 999;
 }
 .center {
  text-align: center;
}
input{
  width: 20px;
  height: 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
}
input:focus{
    outline:none;
    border-color:lightblue;
    box-shadow:0 0 10px lightblue;
    background-color: #ecf5f9;
    border-radius: 25px
}
[type="radio"]:hover{
	cursor: pointer;
	background-color: #666;
}
td{
	text-align: left;
}
</style>
<div class="center"><font color="black" size="6" face="Century Gothic">Daftar pertanyaan<br>PENILAIAN RESIKO PRIBADI TERKAIT COVID-19</font>
	<br><br><br>
    <form action="/dashboard/{{$subject->id}}/tabular" style="margin: 0 auto;box-shadow:0 0 10px black;border-radius: 25px; background: #ada8e6 ;width: 900px; ">
    <font color="black" size="4">
    	<input type="hidden" value="{{$subject->id}}" id="survey_id" name="survey_id" />
    <table align="center">
    	<tr>
    		<td><b> A.</b></td>
    		<td><b> DI LUAR RUMAH</b></td>
    		<td><b>YA / </b></td>
    		<td><b>TIDAK</b></td>
    	</tr>
    	<tr>
    		<td><b>1. &ensp;&ensp;</b></td>
    		<td><b>Saya pergi keluar rumah.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q1" value="1"name="q1">
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q1">
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>2. &ensp;&ensp;</b></td>
    		<td><b>Saya menggunakan transportasi umum : online, angkot, bus, taksi, kereta api.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q2" value="1"name="q2">
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q2">
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>3. &ensp;&ensp;</b></td>
    		<td><b>Saya tidak menggunakan masker pada saat berkumpul dengan orang lain.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q3" value="1"name="q3" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q3" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	<tr>
    		<td><b>4. &ensp;&ensp;</b></td>
    		<td><b>Saya berjabat tangan dengan orang lain.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q4" value="1"name="q4" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q4" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>5. &ensp;&ensp;</b></td>
    		<td><b>Saya tidak membersihkan tangan dengan hand sanitizer/tissue basah<br>sebelum pegang kemudi mobil/motor.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q5" value="1"name="q5" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q5" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>6. &ensp;&ensp;</b></td>
    		<td><b>Saya menyentuh benda/uang yang juga disentuh orang lain.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q6" value="1"name="q6" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q6" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>7. &ensp;&ensp;</b></td>
    		<td><b>Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika : berbelanja,<br> bekerja, belajar, ibadah.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q7" value="1"name="q7" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q7" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>8. &ensp;&ensp;</b></td>
    		<td><b>Saya makan diluar rumah (warung/restaurant.)&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q8" value="1"name="q8" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q8" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>9. &ensp;&ensp;</b></td>
    		<td><b>Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba di tujuan.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q9" value="1"name="q9" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q9" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>10. &ensp;&ensp;</b></td>
    		<td><b>Saya berada di wilayah kelurahan tempat pasien tertular.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q10"value="1" name="q10" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q10" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b> B.</b></td>
    		<td><b> DI DALAM RUMAH</b></td>
    		<td></td>
    	</tr>
    	<tr>
    		<td><b>11. &ensp;&ensp;</b></td>
    		<td><b>Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersikan<br> tangan sebelum pegang gagang(handle) pintu masuk rumah.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q11"value="1" name="q11" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q11" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>12. &ensp;&ensp;</b></td>
    		<td><b>Saya tidak mencuci tangan dengan sabun setelah tiba dirumah.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q12"value="1" name="q12" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q12" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>13. &ensp;&ensp;</b></td>
    		<td><b>Saya tidak menyediakan : tissue basah/antiseptic, masker, sabun antiseptic<br>bagi keluarga di rumah.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q13"value="1" name="q13" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q13" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>14. &ensp;&ensp;</b></td>
    		<td><b>Saya tidak segera merendam baju & celana bekas pakai di luar rumah kedalam<br>air panas/sabun.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q14"value="1" name="q14" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q14" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>15. &ensp;&ensp;</b></td>
    		<td><b>Saya tidak segera mandi keramas setelah saya tiba di rumah.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q15"value="1" name="q15" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q15" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>16. &ensp;&ensp;</b></td>
    		<td><b>Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada<br> keluarga di rumah.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q16"value="1" name="q16" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q16" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b> C.</b></td>
    		<td><b> DAYA TAHAN TUBUH</b></td>
    		<td></td>
    	</tr>
    	<tr>
    		<td><b>17. &ensp;&ensp;</b></td>
    		<td><b>Saya dalam sehari tidak kena cahaya matahari minimal 15 menit.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q17"value="1" name="q17" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q17" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>18. &ensp;&ensp;</b></td>
    		<td><b>Saya tidak jalan kaki/berolah raga minimal 30 menit setiap hari.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q18"value="1" name="q18" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q18" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>19. &ensp;&ensp;</b></td>
    		<td><b>Saya jarang minum vitamin C & E, dan kurang tidur.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q19"value="1" name="q19" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q19" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>20. &ensp;&ensp;</b></td>
    		<td><b>Saya berusia diatas 60 tahun.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q20"value="1" name="q20" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q20" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    	<tr>
    		<td><b>21. &ensp;&ensp;</b></td>
    		<td><b>Saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan kronik.&ensp;&ensp;&ensp;&ensp;</b></td>
    		<td>
    			<label class="switch">
 				<input type="radio" id="q21"value="1" name="q21" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
 			<td>
    			<label class="switch">
 				<input type="radio" name="q21" required>
 				<span class="slider round"></span>
 				</label>
 			</td>
    	</tr>
    </table>
    </font>
    <br><br>
    <button type="submit" class="btn btn-primary">
                    Selesai!
              </button>
              <br><br>
    </form>
</div>  
@stop

