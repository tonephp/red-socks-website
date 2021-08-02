import React from 'react';

import Hero from './hero';

const SliceZone = ({ body }) => {
    return (
        <div>
            {body.map((bodyContent, idx) => {
                if (bodyContent.type === 'hero') {
                    return <Hero 
                        key={idx}
                        backgroundImage={bodyContent.primary.background_image.url}
                        title={bodyContent.primary.hero_title}
                        content={bodyContent.primary.hero_content}
                    />
                }
                return null;
            })}
        </div>
    )
}

export default SliceZone;