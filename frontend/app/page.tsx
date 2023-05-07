import textStyle from "@/components/Texts.module.css";
import landingBg from "@/public/landing-bg.png";
import personImg from "@/public/person.png";
import Image from "next/image";

import { LinkButton } from "@/components/Button";

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
      <main>
        <section className="relative overflow-clip min-h-screen">
          <Image
            className="absolute top-0 left-0 w-full min-h-screen object-cover object-center pointer-events-none -z-10"
            src={landingBg}
            alt="landing"
          />
          <div className="flex min-h-screen items-center container mx-auto">
            <div className="space-y-3">
              <h1>
                Welcome to the School of{" "}
                <span className={textStyle.gradient}>Real Knowledge</span>
              </h1>
              <p>
                Semua bisa mengakses pendidikan secara gratis dan berkualitas
              </p>
              <LinkButton href="/">JOIN NOW</LinkButton>
            </div>
            <Image className="w-1/2" src={personImg} alt="person"></Image>
          </div>
        </section>
        <section id="riset" className="bg-black">
          <div className="container mx-auto py-12">
            <h2 className="text-center">
              Riset membuktikan{" "}
              <span className={textStyle.gradient}>
                Kualitas Pendidikan di Indonesia sangat Rendah
              </span>
              <div className="py-16"></div>
            </h2>
          </div>
        </section>
      </main>
    </>
  );
}
