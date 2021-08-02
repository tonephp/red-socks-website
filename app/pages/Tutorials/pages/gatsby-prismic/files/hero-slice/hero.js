import React from 'react';
import styled from "styled-components"

import RichText from './richText';

const HeroWrapper = styled.section`
    background: url('${props => props.backgroundImage}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: calc(100vh - 66px);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
`;

const Hero = ({ title, content, backgroundImage }) => {
    return (
        <HeroWrapper backgroundImage={backgroundImage}>
            <RichText render={title} />
            <p>{content}</p>
        </HeroWrapper>
    )
}

export default Hero;