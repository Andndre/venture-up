import textStyle from "@/components/Texts.module.css";
import landingBg from "@/public/landing-bg.png";
import personImg from "@/public/person.png";
import risetSvg from "@/public/riset.svg";
import Image from "next/image";

import { LinkButton } from "@/components/Button";
import { ImageCard } from "@/components/Card";

const routes = {
  "/news": {
    text: "News",
    title: "description here",
  },
  "/academy": {
    text: "Academy",
    title: "description here",
  },
  "/forum": {
    text: "Forum",
    title: "description here",
  },
  "/mission": {
    text: "Mission",
    title: "description here",
  },
  "/contact": {
    text: "Contact",
    title: "description here",
  },
};

export default function Home() {
  return (
    <>
      <NavBar />
      <main>
        <Hero />
        <Riset />
        <Kenapa />
        <PembelajaranDiVentureUp />
      </main>
    </>
  );
}

function NavBar() {
  return (
    <header className="fixed px-4 py-2 bg-[rgba(255,255,255,.2)] backdrop-blur w-full z-10">
      <div className="flex justify-between container mx-auto">
        <p>Venture Up</p>
        <ul className="flex gap-6">
          {Object.entries(routes).map(([path, { text, title }]) => (
            <li>
              <a href={path} title={title}>
                {text}
              </a>
            </li>
          ))}
        </ul>
      </div>
    </header>
  );
}

function Hero() {
  return (
    <section className="relative overflow-clip min-h-screen">
      <div className="absolute w-full h-full bg-gradient-to-r from-black to-transparent -z-10" />
      <Image
        className="absolute top-0 left-0 w-full min-h-screen object-cover object-center pointer-events-none -z-20"
        src={landingBg}
        alt="landing"
      />
      <div className="flex min-h-screen items-center container mx-auto px-4">
        <div className="space-y-3">
          <h1>
            Welcome to the School of{" "}
            <span className={textStyle.gradient}>Real Knowledge</span>
          </h1>
          <p>Semua bisa mengakses pendidikan secara gratis dan berkualitas</p>
          <LinkButton href="/">JOIN NOW</LinkButton>
        </div>
        <Image className="w-1/2" src={personImg} alt="person"></Image>
      </div>
    </section>
  );
}

function Riset() {
  return (
    <section id="riset" className="bg-black">
      <div className="container mx-auto py-36 max-w-3xl text-center px-4">
        <h2 className="text-center">
          Riset membuktikan{" "}
          <span className={textStyle.gradient}>
            Kualitas Pendidikan di Indonesia sangat Rendah
          </span>
        </h2>
        <div className="py-8"></div>
        <Image
          src={risetSvg}
          alt="riset"
          className="mx-auto w-full max-w-3xl"
        />
        <div className="py-8"></div>
        <p className="text-gray-300">
          Ini alasannya modul kami dalam bentuk teks karena literasi membaca
          diIndonesia sangat rendah,dan kami juga ingin meningkatkan kualitas
          literasi membaca
        </p>
      </div>
    </section>
  );
}

function Kenapa() {
  return (
    <section id="kenapa" className="bg-bg-blue">
      <div className="container mx-auto py-36 lg:flex lg:gap-4 lg:justify-between px-4">
        <div className="my-auto">
          <h2>
            Kenapa Memilih{" "}
            <span className={textStyle.gradient}>Venture Up?</span>
          </h2>
        </div>
        <div className="hidden lg:block border-r border-white"></div>
        <div className="py-3"></div>
        <div>
          <ol className="space-y-3">
            <li>
              Semua modul pembelajaran kami berkualitas dan gampang dipelajari
            </li>
            <li>
              Venture Up memiliki misi untuk mengedukasi orang awam dengan
              bahasa yang mudah dipahami
            </li>
            <li>
              Materi yang diberikan langsung dari ahlinya dan edukasi yang
              diberikan penting bagi masyarakat
            </li>
          </ol>
        </div>
      </div>
    </section>
  );
}

function PembelajaranDiVentureUp() {
  return (
    <section id="pembelajaran" className="bg-bg-blue">
      <div className="container mx-auto py-36 px-4">
        <h2 className="text-center">
          Pembelajaran di <span className={textStyle.gradient}>Venture Up</span>
        </h2>
        <div className="py-4"></div>
        <div className="bg-gray-900 p-8 rounded-lg">
          <div>
            <p>Kelas 1</p>
            <div className="flex">
              <ImageCard className="w-1/3" href="/person.png" />
              <div className="w-2/3">
                <h3>Dasar Investasi dan Crypto</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. In
                  laborum aspernatur corrupti reprehenderit. Nobis excepturi
                  provident quis ullam soluta aspernatur debitis necessitatibus
                  obcaecati, ducimus officia! Aliquid rem eligendi itaque
                  repudiandae rerum eius, numquam suscipit voluptatem
                  voluptatum, maiores, tenetur aut saepe!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
