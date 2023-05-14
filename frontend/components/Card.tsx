export function ImageCard({
  href,
  className,
}: {
  href: string;
  className?: string;
}) {
  return (
    <svg
      className={className}
      viewBox="0 0 509 313"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
      xmlnsXlink="http://www.w3.org/1999/xlink"
    >
      <path
        d="M58.5 0.5L1 38V293H431.5L481.5 251V0.5H58.5Z"
        fill="url(#pattern0)"
      />
      <path
        d="M58.5 0.5L1 38V293H431.5L481.5 251V0.5H58.5Z"
        fill="url(#paint0_linear_93_2)"
      />
      <path d="M58.5 0.5L1 38V293H431.5L481.5 251V0.5H58.5Z" stroke="#BD00FF" />
      <g filter="url(#filter0_f_93_2)">
        <path
          d="M485 225H504.5V258.5L444.5 308.5H23.5V293.5"
          stroke="#ED1DFF"
        />
      </g>
      <defs>
        <pattern
          id="pattern0"
          patternContentUnits="objectBoundingBox"
          width="1"
          height="1"
        >
          <use
            xlinkHref="#image0_93_2"
            transform="matrix(0.000976562 0 0 0.00160423 0 -0.321368)"
          />
        </pattern>
        <filter
          id="filter0_f_93_2"
          x="19"
          y="220.5"
          width="490"
          height="92.5"
          filterUnits="userSpaceOnUse"
          colorInterpolationFilters="sRGB"
        >
          <feFlood floodOpacity="0" result="BackgroundImageFix" />
          <feBlend
            mode="normal"
            in="SourceGraphic"
            in2="BackgroundImageFix"
            result="shape"
          />
          <feGaussianBlur
            stdDeviation="2"
            result="effect1_foregroundBlur_93_2"
          />
        </filter>
        <linearGradient
          id="paint0_linear_93_2"
          x1="241.25"
          y1="306"
          x2="241.25"
          y2="20.5"
          gradientUnits="userSpaceOnUse"
        >
          <stop />
          <stop offset="1" stopOpacity="0" />
        </linearGradient>
        <image id="image0_93_2" width="1024" height="1024" xlinkHref={href} />
      </defs>
    </svg>
  );
}
