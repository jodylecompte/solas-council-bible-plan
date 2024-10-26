import ApplicationLogo from '@/Components/ApplicationLogo';
import Dropdown from '@/Components/Dropdown';
import NavLink from '@/Components/NavLink';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { Link } from '@inertiajs/react';
import { useState } from 'react';
import { useAuth } from '@/Context/AuthContext';

import { FaUser } from 'react-icons/fa';

export const Header = (props: any) => {
  const [showingNavigationDropdown, setShowingNavigationDropdown] = useState(false);
  const { user } = useAuth();

  const AuthNavItems = () => <div>Logged In</div>;
  const GuestNavItems = () => <div>Guest</div>;

  return (
    // <header className="bg-[#7C2424] text-white p-8 px-6 text-center md:text-left md:px-32 flex flex-col md:flex-row justify-between items-center">
    //   <h1 className="text-2xl font-bold">
    //     <Link href="/">The Solas Council Reformed Bible Study Plan</Link>
    //   </h1>
    //   <nav className="flex gap-7 pt-6 md:pt-0">
    //     <Link href="/about">About</Link>
    //     <Link href="/plan">Plan</Link>
    //     {user && <Link href="/profile">Profile</Link>}
    //     {!user && <Link href="/login">Login</Link>}
    //   </nav>
    // </header>
    <div className="bg-[#7C2424]">
      <div className="navbar text-white max-w-6xl mx-auto flex flex-col items-center justify-center md:flex-row">
        <div className="flex-1">
          <Link href="/" className="btn btn-ghost text-xl text-white">
            The Solas Council Bible Plan
          </Link>
        </div>
        <div className="flex-none">
          <ul className="menu menu-horizontal px-1 items-center">
            <li>
              <Link href="/about">About</Link>
            </li>
            {user && (
              <li>
                <Link href="/plan">Plan</Link>
              </li>
            )}
            <li>
              <details>
                <summary className="w-[125px] flex justify-start md:justify-start">
                  <FaUser />
                </summary>
                <ul className="bg-base-100 rounded-t-none p-2 text-black">
                  {user && (
                    <>
                      <li>
                        <Link href="/profile">Profile</Link>
                      </li>
                      <li>
                        <Link href="/logout">Logout</Link>
                      </li>
                    </>
                  )}
                  {!user && (
                    <>
                      <li>
                        <Link href="/login">Login</Link>
                      </li>
                      <li>
                        <Link href="/register">Register</Link>
                      </li>
                    </>
                  )}
                </ul>
              </details>
            </li>
          </ul>
        </div>
      </div>
    </div>
  );
};
