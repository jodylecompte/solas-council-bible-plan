import { FaUser } from 'react-icons/fa';
import { Link, useForm, usePage } from '@inertiajs/react';

export const Header = (props: any) => {
  const pageProps = usePage();
  const user: any = pageProps.props.auth.user;

  console.log(pageProps);
  const { post } = useForm();

  const logout = (e: any) => {
    e.preventDefault();

    post(route('logout'), {
      onSuccess: () => {
        console.log('Logged out successfully!');
      },
    });
  };

  return (
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
                        <Link className="btn btn-ghost" href="/profile">
                          Profile
                        </Link>
                      </li>
                      <li>
                        <form className="btn btn-ghost" onSubmit={logout}>
                          <button className="" type="submit">
                            Logout
                          </button>
                        </form>
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
