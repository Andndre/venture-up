import style from "./Button.module.css";

export function Button({ children }: { children: React.ReactNode }) {
  return <button className={style.btn}>{children}</button>;
}

export function LinkButton({
  href,
  children,
}: {
  href: string;
  children: React.ReactNode;
}) {
  return (
    <a href={href} className={style.btn}>
      {children}
    </a>
  );
}
