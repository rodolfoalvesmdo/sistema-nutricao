@extends('template')
@section('content')


<html>
<head>
<style>
//Calendário

* {
    box-sizing: border-box;
}

ul {
    list-style-type: none;
}

.month {
    padding: 35px 25px;
    width: 100%;
    background: #20d2da;
    text-align: center;
    border-radius: 10px 10px 0 0;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-weight: bold;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.weekdays {
    margin: 0;
    padding: 10px 0;
    color: #696969;
    font-weight: bold;
    text-transform: uppercase;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 24px;
    font-size:16px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #20d2da;
    color: white !important
}

.days span:hover {
    padding: 5px;
    background: #20d2da;
    color: white !important;
    cursor: pointer;
}

//Tabela

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 3px solid #eee;
    text-align: center;
    width: 144px;
    height: 50px;
    color: #696969;
    background-color: #ddd;
}

tr:nth-child(even) {
    {{--  background-color: #dddddd;  --}}
}

th:nth-of-type(1),
td:nth-of-type(1) {
    width: 100px;
    font-weight: bold;
}

textarea {
    resize: none;
    border: none;
    background-color: #ddd;
}

.calendario {
    margin-top: 50px;
    margin-bottom: 150px;
    border-radius: 10px 10px 0 0;
    box-shadow: 0px 2px 10px #8a8989;
}

</style>
</head>




<body>

<div class="calendario">
{{--  <h2>Agenda</h2>  --}}

<div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      Junho<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>SEG</li>
  <li>TER</li>
  <li>QUA</li>
  <li>QUI</li>
  <li>SEX</li>
  <li>SÁB</li>
  <li>DOM</li>
</ul>

<ul class="days">  
  <li><span>1</span></li>
  <li><span>2</span></li>
  <li><span>3</span></li>
  <li><span>4</span></li>
  <li><span>5</span></li>
  <li><span>6</span></li>
  <li><span>7</span></li>
  <li><span>8</span></li>
  <li><span>9</span></li>
  <li><span>10</span></li>
  <li><span>11</span></li>
  <li><span>12</span></li>
  <li><span>13</span></li>
  <li><span class="active">14</span></li>
  <li><span>15</span></li>
  <li><span>16</span></li>
  <li><span>17</span></li>
  <li><span>18</span></li>
  <li><span>19</span></li>
  <li><span>20</span></li>
  <li><span>21</span></li>
  <li><span>22</span></li>
  <li><span>23</span></li>
  <li><span>24</span></li>
  <li><span>25</span></li>
  <li><span>26</span></li>
  <li><span>27</span></li>
  <li><span>28</span></li>
  <li><span>29</span></li>
  <li><span>30</span></li>
  <li><span>31</span></li>
</ul>


<table>

  <tr>
    <td>8:00</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>8:45</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>9:30</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>10:15</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>11:00</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>11:45</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>12:30</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>13:15</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>14:00</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>14:45</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>15:30</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>16:15</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>17:00</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>17:45</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  <tr>
    <td>18:30</td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
    <td><textarea name="" id="" cols="15" rows="4"></textarea></td>
  </tr>

  
</table>

</div>
</body>
</html>


@endsection