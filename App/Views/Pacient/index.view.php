<?php
/**
 * @var \Framework\Support\LinkGenerator $link
 */
?>

<!-----------Hlavna cast stranky - Kalendar---------->
<main class = "pacientDashboard_main">
        <div>
            <h1>Rezervácia termínov</h1>
            <table>
                <caption>Október 2026</caption>
                <thead>
                    <tr>
                        <th><span class = "full_day_name">Pondelok</span>
                            <span class = "short_day_name">Po</span></th>
                        <th><span class = "full_day_name">Utorok</span>
                            <span class = "short_day_name">Ut</span></th>
                        <th><span class = "full_day_name">Streda</span>
                            <span class = "short_day_name">St</span></th>
                        <th><span class = "full_day_name">Štvrtok</span>
                            <span class = "short_day_name">Št</span></th>
                        <th><span class = "full_day_name">Piatok</span>
                            <span class = "short_day_name">Pi</span></th>
                        <th><span class = "full_day_name">Sobota</span>
                            <span class = "short_day_name">So</span></th>
                        <th><span class = "full_day_name">Nedeľa</span>
                            <span class = "short_day_name">Ne</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                        <td>31</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--Bocny panel stranky-->
        <aside>

            <!-- Informacie o prihlasenom pouzivatelovi -->
            <div>
                <h2>Osobné informácie</h2>
                <!-- Pouzitie definition list na zobrazenie udajov kde dt je názov a dd je hodnota -->
                <dl>
                    <dt>Meno:</dt>
                    <dd>menoUzivatela</dd>
                    <dt>Priezvisko:</dt>
                    <dd>priezviskoUzivatela</dd>
                    <dt>Tel. c:</dt>
                    <dd>+421 900 000 000</dd>
                    <dt>Adresa:</dt>
                    <dd>adresaUzivatela</dd>
                </dl>
                <button>Upraviť údaje</button>
            </div>

            <!--Datum poslednej preventivnej prehliadky prihlaseneho uzivatela-->
            <div>
                <h2>Posledná preventivná prehliadka</h2>
                <time datetime="2024-01-01">01.01.2024</time>
            </div>

            <div>
                <h2>Často kladené otázky</h2>
                <div class = "otazka">
                    <h3>Otázka 1</h3>
                </div>
                <div class = "otazka">
                    <h3>Otázka 2</h3>
                </div>
                <div class = "otazka">
                    <h3>Otázka 3</h3>
                </div>
            </div>
        </aside>
</main>