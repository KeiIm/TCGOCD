<style>
  @keyframes slideInFromTop {
    0% {
      transform: translateY(-100%);
    }
    100% {
      transform: translateY(0);
      transform-origin: bottom left;
      transform: rotate(-2deg);
    }
  }

.banner {
  background-color: #FCA311;
  color: #14213D;
  padding: 20px 20px 10px;
  width: 101%;
  animation: 0.15s ease-in 0s 1 slideInFromTop;
  transform-origin: bottom left;
  transform: rotate(-2deg);
}
</style>

<header class="banner">
    <h1 style="font-size: 24px;"><b><?= strtoupper($heading) ?></b></h1>
</header>