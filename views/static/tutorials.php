<?php
    $this->title = 'Tutorials';
?>

<style type="text/css">

    @media screen and (min-width: 840px) {
        #fakeheader {
            display: none !important;
            padding: 20px;
            border: 20px;
        }
    }

    .layer {
        background-color: rgba(248, 247, 216, 0.7);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    ul#li0 {
        width: 70%;
        margin: auto;
    }

    li#li0 {
        margin: 0% 0% 40px 0;
    }

</style>

<section style="background-color: #f1f1f1f1; text-align: center; align-content: center;">
    <div style="text-align: center; padding:10px;">
        <h2 style="color:#3ac984; font-size:50px;">VerCors Tutorials</h2>
        <ul id='li0' style="text-align: center; align-content: center;">
            <li id='li0'><h2 style="color: #3a3a3a"><a
                            href='https://github.com/wytseoortwijn/vercors/wiki/A-Brief-Introduction-to-VerCors'>Introduction
                        to VerCors</a></h2>
                VerCors is a toolset that allows to reason about data-race freedom, memory safety and functional
                correctness of high-level parallel and concurrent languages, like Java, OpenCL and OpenMP. This document
                contains a brief introduction to static verification with the VerCors toolset, in the form of a
                tutorial.
            </li>
            <li id='li0'><h2 style="color: #3a3a3a"><a href='https://github.com/utwente-fmt/vercors/wiki'>Eclipse and
                        IntelliJ Vercors Setup</a></h2>
                This document gives instructions on how to configure a development environment for VerCors, using either
                Eclipse or Intellij IDEA. You can also find a list of common instalation errors. The setup for IntelliJ
                IDEA is considerably easier, so we recommend using that.
            </li>
            <li id='li0'><h2 style="color: #3a3a3a"><a
                            href='https://github.com/utwente-fmt/vercors/wiki/Axiomatic-Data-Types'>Axiomatic Data
                        Types</a></h2>
                This page discusses the axiomatic data types (ADTs) that are supported by VerCors. Some of these ADTs
                like sequences and sets are natively supported by the Viper toolset, the main back-end of VerCors. ADTs
                that are not natively supported, like matrices, vectors, and option types, are specified as domains in
                the config/prelude.sil file (specified in the Silver language). During the translation steps in VerCors,
                the SilverClassReduction class includes all domains that are needed to verify the input program.
            </li>
            <li id='li0'><h2 style="color: #3a3a3a"><a
                            href='https://github.com/utwente-fmt/vercors/wiki/Prototypal-Verification-Language'>The PVL
                        language</a></h2>
                This page discusses the language features of PVL, the Prototypal Verification Language of VerCors. In
                particular, it elaborates on design choices and gives implementation details.
            </li>
            <li id='li0'><h2 style="color: #3a3a3a"><a href='https://github.com/utwente-fmt/vercors/wiki/PVL-Syntax'>PVL
                        Syntax</a></h2>
                On this page you can find a description of the syntax of PVL, Prototypal Verification Language; one of
                the languages for which VerCors supports verification.
            </li>
            <li id='li0'><h2 style="color: #3a3a3a"><a
                            href='https://github.com/utwente-fmt/vercors/wiki/What-does-this-VerCors-error-message-mean%3F'>What
                        does this VerCors error message mean?</a></h2>
                In this tutorial you will learn what the different error messages in VerCors mean.
            </li>
            <li id='li0'><h2 style="color: #3a3a3a"><a
                            href='https://github.com/utwente-fmt/vercors/wiki/Developing-for-VerCors'>Developing for
                        VerCors</a></h2>
                In this tutorial you can find guidelines and a workflow description for contributing to the VerCors
                developement.
            </li>
        </ul>
    </div>
</section>
