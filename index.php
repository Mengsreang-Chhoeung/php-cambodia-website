<?php
include "layouts/header.php";
include "layouts/navbar.php";
?>


<?php
$query = "SELECT sl.description, sl.image FROM sliders sl ORDER BY sl.id LIMIT 1";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
    <!-- Image Container -->
    <div class="img-container" style="background-image: url('./img/<?= $row['image']; ?>');">
      <!-- Modal -->
      <div class="modal">
        <?= $row['description']; ?>
      </div>
      <!-- End of Modal -->
    </div>
    <!-- End of Image Container -->
<?php
  }
}
?>

<!-- Capital Section -->
<section class="capital" id="capital">
  <!-- Title -->
  <div class="title">
    <h1>Capital</h1>
    <div class="line"></div>
  </div>
  <!-- End of Title -->
  <div class="detail">

    <?php
    $query = "SELECT cap.title, cap.description, cap.thumbnail FROM capitals cap ORDER BY cap.id LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $cap_title = $row['title'];
        $cap_description = $row['description'];
        $cap_thumbnail = $row['thumbnail'];
    ?>
        <h1 class="detail-title">
          <?= $cap_title; ?>
        </h1>
        <img src="img/<?= $cap_thumbnail; ?>" />
        <p class="desc">
          <?= $cap_description; ?>
        </p>
    <?php
      }
    }
    ?>

    <a href="#capital" class="btn" style="margin-right: auto;">See More <i class="fas fa-chevron-right"></i></a>
  </div>
</section>
<!-- End of Capital Section -->

<!-- City Section -->
<section class="city" id="city">
  <!-- Title -->
  <div class="title">
    <h1>City</h1>
    <div class="line"></div>
  </div>
  <!-- End of Title -->
  <div class="detail">
    <!-- City Content -->
    <?php
    $query = "SELECT cit.title, cit.description, cit.thumbnail FROM cities cit LIMIT 2";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $cit_title = $row['title'];
        $cit_description = $row['description'];
        $cit_thumbnail = $row['thumbnail'];
    ?>
        <div class="content-city">
          <h2><?= $cit_title; ?></h2>
          <img src="img/<?= $cit_thumbnail; ?>" />
          <p class="desc">
            <?= $cit_description; ?>
          </p>
          <a href="#city" class="btn" style="margin-right: auto;">See More <i class="fas fa-chevron-right"></i></a>
        </div>
    <?php
      }
    }
    ?>
    <!-- End of City Content -->
  </div>
</section>
<!-- End of City Section -->

<!-- Province Section -->
<section class="province" id="province">
  <!-- Title -->
  <div class="title">
    <h1>Province</h1>
    <div class="line"></div>
  </div>
  <!-- End of Title -->
  <div class="detail">
    <!-- Province Content -->
    <?php
    $query = "SELECT pro.title, pro.description, pro.thumbnail FROM provinces pro LIMIT 3";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $pro_title = $row['title'];
        $pro_description = $row['description'];
        $pro_thumbnail = $row['thumbnail'];
    ?>
        <div class="content-province">
          <h2><?= $pro_title; ?></h2>
          <img src="img/<?= $pro_thumbnail; ?>" />
          <p class="desc">
            <?= $pro_description; ?>
          </p>
          <a href="#province" class="btn" style="margin-right: auto;">See More <i class="fas fa-chevron-right"></i></a>
        </div>
    <?php
      }
    }

    ?>
    <!-- End of Province Content -->
  </div>
</section>
<!-- End of Province Section -->

<!-- About Section -->
<section class="about" id="about">
  <!-- Title -->
  <div class="title">
    <h1>About</h1>
    <div class="line"></div>
  </div>
  <!-- End of Title -->
  <div class="detail">
    <p class="desc">
      <b>Cambodia</b>( Khmer: កម្ពុជា ), officially the Kingdom of
      Cambodia (Khmer: ព្រះរាជាណាចក្រកម្ពុជា), is a country located in the
      southern portion of the Indochina peninsula in Southeast Asia. It is
      181,035 square kilometres (69,898 square miles) in area, bordered by
      Thailand to the northwest, Laos to the northeast, Vietnam to the
      east and the Gulf of Thailand to the southwest. The sovereign state
      of Cambodia has a population of over 15 million. Buddhism is
      enshrined the constitution as the official state religion, and is
      practised by more than 97% of the population. Cambodia's minority
      groups include Vietnamese, Chinese, Chams and 30 hill tribes. The
      capital and largest city is Phnom Penh, the political, economic and
      cultural centre of Cambodia. The kingdom is an elective
      constitutional monarchy with a monarch, currently Norodom Sihamoni,
      chosen by the Royal Council of the Throne as head of state. The head
      of government is the Prime Minister, currently Hun Sen, the longest
      serving non-royal leader in Southeast Asia, ruling Cambodia since
      1985. In 802 AD, Jayavarman II declared himself king, uniting the
      warring Khmer princes of Chenla under the name "Kambuja".[10] This
      marked the beginning of the Khmer Empire, which flourished for over
      600 years, allowing successive kings to control and exert influence
      over much of Southeast Asia and accumulate immense power and wealth.
      The Indianised kingdom facilitated the spread of first Hinduism and
      then Buddhism to much of Southeast Asia and undertook many religious
      infrastructural projects throughout the region, including the
      construction of more than 1,000 temples and monuments in Angkor
      alone. Angkor Wat is the most famous of these structures and is
      designated as a World Heritage Site. In the fifteenth century, after
      the rebellion of Ayutthaya, which was formerly ruled by the Khmer
      Empire, Cambodia experienced the decline of power. Cambodia faced
      two increasingly powerful neighbors, Ayutthaya of Thailand and
      Nguyen dynasty of Vietnam, and marking the downturn of Cambodia's
      fate. In 1863, Cambodia became a protectorate of France, and later
      was incorporated into French Indochina of Southeast Asia. Cambodia
      gained independence from France in 1953. The Vietnam War extended
      into the country in 1965 with the expansion of the Ho Chi Minh Trail
      and establishment of the Sihanouk Trail. This led to the US bombing
      of Cambodia from 1969 until 1973. Following the Cambodian coup of
      1970 which installed the right-wing pro-US Khmer Republic, the
      deposed King Sihanouk gave his support to his former enemies, the
      Khmer Rouge. With the support of the monarchy and North Vietnam, the
      Khmer Rouge emerged as a major power, taking Phnom Penh in 1975. The
      Khmer Rouge then carried out the Cambodian genocide from 1975 until
      1979, when they were ousted by Vietnam and the Vietnamese-backed
      People's Republic of Kampuchea, supported by the Soviet Union, in
      the Cambodian–Vietnamese War.
    </p>
  </div>
</section>
<!-- End of About Section -->
<!-- Contact Section -->
<section class="contact" id="contact">
  <!-- Title -->
  <div class="title">
    <h1>Contact</h1>
    <div class="line"></div>
  </div>
  <!-- End of Title -->
  <div class="detail">
    <form>
      <input type="text" placeholder="Full Name" required />
      <input type="email" placeholder="E-mail" required />
      <input type="text" placeholder="Phone Number" required />
      <textarea placeholder="Your Message" cols="30" rows="10" required></textarea>
      <input type="submit" value="Submit" class="btn" style="
                margin-left: auto;
                border: none;
                cursor: pointer;
                font-size: 18px;
              " />
    </form>
  </div>
</section>
<!-- End of Contact Section -->

<?php
include "layouts/footer-navbar.php";
include "layouts/footer.php";
?>