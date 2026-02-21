"use client";

import Link from "next/link";
import Image from "next/image";
import { usePathname } from "next/navigation";
import "./NavBar.css";

const Header = () => {
  const pathname = usePathname();

  const links = [
    { href: "/", label: "Home" },
    { href: "/store", label: "Store" },
    { href: "/services", label: "Services" },
    { href: "/news", label: "News" },
    { href: "/support", label: "Support" },
    { href: "/contacts", label: "Contact" },
  ];

  return (
    <header className="header">
      <div className="container">
        <Link href="/">
          <Image
            src="/assets/svg/logo.svg"
            alt="logo"
            width={196}
            height={30}
            priority
          />
        </Link>

        <nav className="nav">
          {links.map((link) => (
            <Link
              key={link.href}
              href={link.href}
              className={pathname === link.href ? "active" : ""}
            >
              {link.label}
            </Link>
          ))}
        </nav>

        <Link href="/member" className="member-btn">
          Member Area
        </Link>
      </div>
    </header>
  );
};

export default Header;
