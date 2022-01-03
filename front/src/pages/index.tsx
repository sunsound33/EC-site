import type { NextPage } from "next";
import Head from "next/head";
import Link from "next/link";
import Header from "../layouts/Header";


const Home: NextPage = () => {
  return(
    <>
      <Header/>
      <h1　className="text-center ">ポートフォリオ　サイトです。</h1>
    </>
  );
}
export default Home;